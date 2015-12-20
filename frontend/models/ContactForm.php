<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
<<<<<<< HEAD
    public $subject;
    public $body;
    public $verifyCode;
=======
    public $phone;
    public $content;
>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
<<<<<<< HEAD
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
=======
            [['email'], 'required'],
            [['phone', 'content'], 'string'],
            // email has to be a valid email address
            ['email', 'email'],
>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'verifyCode' => 'Verification Code',
=======
            'name' => 'Họ và tên',
            'phone' => 'Số điện thoại',
            'email' => 'Email',
            'content' => 'Nội dung'
>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
<<<<<<< HEAD
            ->setSubject($this->subject)
            ->setTextBody($this->body)
=======
            ->setSubject('Liên hệ từ website phutungotomayxaydung.com')
            ->setTextBody(
              'Họ và tên: ' . $this->name . '<br />'.
              'Số điện thoại: ' . $this->phone . '<br />'.
              'Email: ' . $this->email . '<br />'.
              'Nội dung: ' .$this->content
            )
>>>>>>> 7a8b7d089007b8e390152c511b7569359845b627
            ->send();
    }
}
