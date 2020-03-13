<?php

namespace App\Http\Middleware;

use Closure;
use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;

class EmailMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $res = $next($request); //请求前后，影响执行结果

        $mail = new Message;
        $mail->setFrom('Nick <1165296623@qq.com>')
            ->addTo($request->email)
            //->addTo('gwng2019@163.com')
            ->setSubject('邮件标题')
            ->setBody("邮件内容.");

        $mailer = new \Nette\Mail\SmtpMailer([
        'host' => 'smtp.qq.com',
        'username' => '1165296623',
        'password' => 'esobenbyattcbace', //授权码
        'secure' => 'ssl',
        // 'context' =>  [
        //     'ssl' => [
        //         'capath' => '/path/to/my/trusted/ca/folder',
        //      ],
        //],
]);
        $mailer->send($mail);
        return $res;
    }
}
