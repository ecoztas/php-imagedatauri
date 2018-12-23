# ImageDataURI

### Açıklama:
Resim dosyalarını Base64 formatına çeviren metodu barındırmaktadır.

Base64 formatına çevrilen resim dosyası; daha hızlı yüklenmekte ve resim kaynağına ulaşılamamaktadır.

Daha detaylı bilgi edinmek için; [buradan](https://emrecanoztas.com/php-ile-imagedatauri-olusturma/) blogumda yazmış olduğum makaleye ulaşabilirsiniz.

**Not:** SEO açısından uygun değildir.

### Gereksinimler:
PHP >= 5.3

### Kullanımı:
`method.imagedatauri.php` dosyasını sayfanıza dahil ettikten sonra; 

```
convertImageDataURI($path);
```
metoduna, çevrilmesini istediğiniz resim dosyasının yolu yazılmalıdır.

Canlı bir örnek olarak;

```
$src = convertImageDataURI('./the-good-the-bad-and-the-ugly.jpg');
```

Daha sonrasında;

```
<img src="<?=$source?>" alt="">
```

şeklinde kullanılabilir.
