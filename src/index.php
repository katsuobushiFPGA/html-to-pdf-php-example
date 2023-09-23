<?php
namespace Main;

require_once "./vendor/autoload.php";

use Spiritix\Html2Pdf\Converter;
use Spiritix\Html2Pdf\Input\StringInput;
use Spiritix\Html2Pdf\Input\UrlInput;
use Spiritix\Html2Pdf\Output\DownloadOutput;
use Spiritix\Html2Pdf\Output\EmbedOutput;

$input = new UrlInput();
$input->setUrl('https://www.nicovideo.jp/');

$converter = new Converter($input, new EmbedOutput());

$converter->setOption('landscape', false);

$converter->setOptions([
    'printBackground' => true,
]);

$output = $converter->convert();
$output->embed('file.pdf');