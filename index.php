<?
header("Content-Type: application/json");
if (empty($_GET["text"])) $_GET["text"] = "ТЫ МОЛОДЕЦ!";

$text = mb_strtoupper($_GET["text"],"UTF-8");
$response = <<<RESP
{
    "response_type": "in_channel",
    "text": "*ВЖУХ, И {$text}*",
    "attachments": [
        {
            "image_url":"https://lamps.ecwid.com/~ene/vjuh/vjuh.jpg"
        }
    ]
}
RESP;
echo $response;
?>
