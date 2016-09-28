<?php
$token_bot="<token_bot>";
$data['chat_id']=<ID_penerima>;
$data['text']="<isi teks>";
function kirimperintah($perintah,$token_bot,array $keterangan=null)
{
$url="https://api.telegram.org/bot".$token_bot."/";
$url.=$perintah."?";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$keterangan);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}
kirimperintah("sendMessage",$token_bot,$data);
echo 'done';
?> 
