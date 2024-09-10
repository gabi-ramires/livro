<a href="index.html">Inicio</a>

<?php

// URL da solicitação
$url = 'https://www.instagram.com/stories/cactoramires/?r=1';

// Configuração do cabeçalho HTTP
$headers = [
    'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
    'Cookie: mid=Zhf6HgAEAAFkYo_IITx_TVX2aZVa; ig_nrcb=1; dpr=1; wd=1366x647; csrftoken=wjbKROX37T4ozvyrs2e6IzSHUvMe5acN; ds_user_id=53215391319; sessionid=53215391319%3A1NiFkFHzPnpLAq%3A27%3AAYe-uSAefPDXvQgZ40wHngHov8H-O-yLVnfiH0OvHA',
    'Connection: keep-alive',
    'Upgrade-Insecure-Requests: 1',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: navigate',
    'Sec-Fetch-User: ?1',
    'Sec-Fetch-Dest: document'
];

// Inicializa uma sessão cURL
$ch = curl_init();

// Define a URL
curl_setopt($ch, CURLOPT_URL, $url);

// Define os cabeçalhos
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Define que queremos retornar o resultado como string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição
$response = curl_exec($ch);

// Fecha a sessão cURL
curl_close($ch);

// Executa a solicitação
$response = curl_exec($ch);

// Expressão regular para encontrar todas as ocorrências de "username"
preg_match_all('/"username":"(.*?)"/', $response, $matches);

// Exibe os usernames encontrados
$usernames = $matches[1]; // $matches[1] contém as capturas da expressão regular
var_dump($usernames); die();
// Checa se houve erros
if ($response === false) {
    echo 'Erro: ' . curl_error($ch);
} else {
    // Imprime a resposta
    /*
    $response = '  "encrypted_serialized_cat": "AXm2IKOdWNBdkUDrBqUgiIo2XEmq41QY7Hr_Ccf9iTqrHGMfVK3pfAJDZyJW-YGrxDKRZoMmvvKFnJZce_ahEAo1jQH2zOo0fwjhzfqGdU9vQCvgdyLPw1OxzrRBWaSZtwHSb_xd_DlfFBdI5fE_9XtFPS3uWgKl75Z4vndFSwU2CPdMIqClP5X_jPcgBzr3cZPNhXjOS8ul3xix5Xz8-tQ-wcIYPMGROUUuhSlFQkCl4z10_YsMN27DyazSFdASVepl46-1oinkTOWi9hbj52okyFMbxmTS7C-POgGFLGmysFlN8DasHgKi4tdIM9VdOT5n1zctpgzhMwnFfyJ3j3PGg7TZDkh_d11B-Y71yHWaA9R2vhBln3Ofh76-tslBqAC-WCelDuXz_2JuUSED7HQSwN6hYsQXElQaFgHysVn64Masm9K3cVBR6jelKBP9DgspVzE3Kr6ioTOHRkdFikuxja72Tu4oqLWVwAVlUQgnwCPSlKh_wANJiULQ20zfRPPh4PGrOO_c9bm5bGyAVCKTVRAPCaZnBo9Vg3UwC0dqf4uL445ZqZwE62Y3y7ACWJEpZ3ZUHhHwTvjsX0OELyhd5N52y7BuGlnyt3H9bUEka_MxqhzI4BDKOA7JWJUcFyfzuwdagZaY3x5wNq03r5Gy0-l5yBggSmLu98Swo3WDGRoG2HXeaDeaXAflEQks8JHg_CDG6BqpmsCiy5F9MsNK529ZcoiNs9OrwlC1oVxjWlsQAUHDBT51PMg1BiIuBoNJS4jjbz8ar7xGsZQEmH5GCldwgcZQIGFa9vQSTa5TmfnNZlCxQvkTkn_-qwBg4LDjKJez3HTABaKn-9oRpkO1vQqw80FHCXLsb2NTwG7xoUtbPB5JtQQVWyrpdRkaECyUHk2rV1HnD_5s_DCefm7Touk22qQ2_HEiaObbpdyq3bmjxliPaFJzfhL8YqLfSZvTgpt0yA3WccBCzjiVXSRPCITKqYRC_crI83irvCK98C9U12U2zGe5Tl0Y1AvpggHpyaLMsuPrAsz6OFdJn1hjPiJTPNSMIAvPKCY_aHsWJq0DqX9xZ9sZ9WZzm08QRoeTs1uQqO75iT0hzIrqgXSN0Xdu1ezymPlTYdwLpfMpqZxaFWL9WHez8-W9V_C2m3oUKdNl98kOv6no6Prylckyb-6dUo8Mu4xr3F_npXDkTJ4LNhM2x9ngulerIGzm79MpZGEAcTpNGjjvwjYGnWqhM8IIdbfiCk3nDceDqf2TgXFDC-pXkJJK5pjBbGSDkUewcFXJtOP57zg-cjGB4EsTFQCgIXGKIzTkRO4Md7jeNFj4cuZxtB1nN00OAVJc0YhJTsM4MuFDwM_EX4X639re1RE4N0Kz",
                    "expiration_time_in_seconds": 1726019866
                },
                "logoutToken": "AfeMIQZWgxbqR38NmvI",
                "sessionId": "17843696212148243",
                "userKeyBase": "fe229b1602c7f32de9130566567a43a4a86627cfb000108f762f4411ce8bc3c4",
                "userId": 100710224666295
            },
            5895
        ],
        [
            "PolarisViewer",
            [
            ],
            {
                "data": {
                    "biography": "\ud83d\udc69\ud83c\udffb\u200d\ud83d\udcbb Dev na \u0040kinghost \ud83d\udc51\n\u264c\ud83c\udfcd\ufe0f\ud83c\udf08\ud83d\udc9a",
                    "business_contact_method": null,
                    "can_follow_hashtag": true,
                    "can_see_organic_insights": false,
                    "category_name": null,
                    "external_url": "",
                    "fbid": "17841405922525622",
                    "full_name": "Gabriela Ramires",
                    "has_phone_number": false,
                    "has_profile_pic": true,
                    "hide_like_and_view_counts": false,
                    "id": "5884981417",
                    "is_aggregated_time_tracking_enabled": false,
                    "is_business_account": false,
                    "is_joined_recently": false,
                    "is_user_in_canada": false,
                    "is_private": false,
                    "is_professional_account": false,
                    "profile_pic_url": "https:\/\/scontent.cdninstagram.com\/v\/t51.2885-19\/455053376_421340647590740_5463726277160777247_n.jpg?stp=dst-jpg_s150x150&_nc_ht=scontent.cdninstagram.com&_nc_cat=108&_nc_ohc=qnB4UqiYPukQ7kNvgHq9AnI&_nc_gid=44c3393239b74066827828a8a4d95271&edm=APs17CUBAAAA&ccb=7-5&oh=00_AYA6NUM3-QwZD6lpwwOvJxGz1gZ-DsXESSqRGWo0aTcmBQ&oe=66E5774F&_nc_sid=10d13b",
                    "profile_pic_url_hd": "https:\/\/scontent.cdninstagram.com\/v\/t51.2885-19\/455053376_421340647590740_5463726277160777247_n.jpg?stp=dst-jpg_s320x320&_nc_ht=scontent.cdninstagram.com&_nc_cat=108&_nc_ohc=qnB4UqiYPukQ7kNvgHq9AnI&edm=APs17CUBAAAA&ccb=7-5&oh=00_AYB8vBK8EtK_llVfUVYaYh8a3dv9ztB36GOlAxk4omeD9Q&oe=66E5774F&_nc_sid=10d13b",
                    "should_show_category": null,
                    "should_show_public_contacts": null,
                    "username": "cactoramires",
                    "is_supervised_user": false,
                    "guardian_id": null,
                    "is_supervision_enabled": true,
                    "is_basic_ads_opted_in": false,
                    "basic_ads_tier": 0,
                    "probably_has_app": true
                },
                "id": "5884981417"
            },
            7365
        ]
    ],
    "require": [
        [
            "SharedOrWebWorkerBootstrapInit",
            "startServerJS",
            [
                "IGDAWMainWebWorker"
            ],
            [
                {
                    "__m": "IGDAWMainWebWorker"
                }
            ]
        ],';
*/
        
// Encontrar a posição da substring "PolarisViewer"
$startIndex = strpos($response, "username");

if ($startIndex !== false) {
    // Adicionar o comprimento da substring para começar logo após "PolarisViewer"
    $startIndex += strlen("username");

    // Definir o comprimento da substring desejada
    $length = 2000;

    // Extrair a substring
    $result = substr($response, $startIndex, $length);

    // Exibir o resultado
    echo "<pre>";
    var_dump($result);
} else {
    echo "Substring 'username' não encontrada.";
}

}

// Fecha a sessão cURL
curl_close($ch);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>

    <div id="cu"></div>

<script>

    const cookies = window.document.cookie;
    let div = document.getElementById('cu');
    div.innerHTML = cookies;

</script>
</body>
</html>


