<?php

namespace Core\Services;

use Core\Config;
use Mailjet\Resources;

require_once 'Core/Config.php';

class Services extends Config
{

    public function sendMail($to, $subject, $htmlPart)
    {
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => MJ_FROM_EMAIL,
                        'Name' => MJ_FROM_NAME
                    ],
                    'To' => $to,
                    'Subject' => $subject,
                    'TextPart' => "",
                    'HTMLPart' => $htmlPart,
                    'CustomID' => ""
                ]
            ]
        ];
        $this->mailjet->post(Resources::$Email, ['body' => $body]);
    }

    public function getRepository($entity)
    {
        if(class_exists('\App\Model\\' . ucfirst($entity) . 'Repository')) {
            $repository = '\App\Model\\' . ucfirst($entity) . 'Repository';
            return new $repository();
        }

        throw new \Error('repository not found');
    }

    public function getDoctrine()
    {
        return $this->entityManager;
    }

    public function getUrlLoginFacebook($scope)
    {
        return $this->helper->getLoginUrl(PATH .'/user/loginfb?login=true', $scope);
    }

    public function getProfilFacebook()
    {
        try {
            $accessToken = $this->helper->getAccessToken();
            $response = $this->fb->get('/me?fields=email,first_name,last_name,gender', $accessToken->getValue());
            return $response->getGraphUser();
        } catch (FacebookResponseException  $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
    }

    public function uploadFile($name)
    {
        $storage = new \Upload\Storage\FileSystem(UPLOAD_PATH);
        $file = new \Upload\File($name, $storage);

        $new_filename = uniqid();
        $file->setName($new_filename);

        $file->addValidations(array(
            // Ensure file is of type "image/png"
            new \Upload\Validation\Mimetype(['image/png', 'image/jpg', 'image/jpeg', 'application/pdf']),
            new \Upload\Validation\Size('5M')
        ));

        $data = array(
            'name' => $file->getNameWithExtension(),
            'extension' => $file->getExtension(),
            'mime' => $file->getMimetype(),
            'size' => $file->getSize(),
            'md5' => $file->getMd5(),
            'dimensions' => $file->getDimensions()
        );

        try {
            $file->upload();
            return $data;
        } catch (\Exception $e) {
            $errors = $file->getErrors();
            var_dump($errors);
        }
    }
}