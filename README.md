#Шаблон phpunit тестов с подключением ядра Битрикс.

Классы для тестирования должны быть размещены в local/classes/, тесты классов - в local/tests/. Если нужно использовать другие пути, то отредактируйте 

`
"classmap": [
	"../classes/"
]
`

в local/tests/composer.json и

`
$_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../';
`

в local/tests/bootstrap.php.
