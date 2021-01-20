# yii2-gokce

komut isteminden lecture-webde vagranta gidilir

`ssh -i .vagrant/machines/orgunweb/virtualbox/private_key vagrant@orgunweb`

komutuyla orgunwebe girilir

`cd /var/www/advanced/`

komutuyla yii2 advanced projesinin içine girilir

` composer require --prefer-dist gokceyilmazz/yii2-gokce "*"`

hata verdikten sonra bu komutu deniyoruz:
` composer require --prefer-dist gokceyilmazz/yii2-gokce "dev-main"`

daha sonra backend/config/main dosyasına gidilir ve modules kısmına verilenler yazılır:
` 'modules' => [
        'content' => [
            'class' => 'gokceyilmazz/content/Module'
        ]
    ], `



![foto1](https://github.com/gokceyilmazz/yii2-gokce/blob/main/2021-01-20.png)
![foto2](https://github.com/gokceyilmazz/yii2-gokce/blob/main/2021-01-20%20(1).png)
![foto3](https://github.com/gokceyilmazz/yii2-gokce/blob/main/2021-01-20%20(2).png)
![foto4](https://github.com/gokceyilmazz/yii2-gokce/blob/main/2021-01-20%20(3).png)
![foto5](https://github.com/gokceyilmazz/yii2-gokce/blob/main/2021-01-20%20(4).png)
![foto6](https://github.com/gokceyilmazz/yii2-gokce/blob/main/2021-01-20%20(5).png)

