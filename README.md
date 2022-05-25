# API
Простой API для демонстрации уровня понимания ООП

Простой API с basic-autorization (или авторизацией по параметрам запроса). Нужный функционал авторизации подключается заменой авторизатора (BasicAuthorizator/RequestAuthorizator) в классе ядра Kernel

Возможные параметры при обеих видах авторизации:

format={json,array} - отдает запрашиваемый ресурс в запрашиваемом формате. При отсутствии параметра - отдает array
id={0, 9} - отдает конкретный запрашиваемый ресурс


При RequestAuthorizator необходимо передавать 2 доп. параметра запроса user/password (!!!user/password жестко вшиты в Kernel)


Параметры комбинируемы, в любом порядке


P.S. Неймспейсы не использовались
