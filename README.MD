**********Datas**********

``time()`` => retorna a data em milisgundos;

``date("d/m/Y")`` => recebe um parâmetro (d = day/m = month/ Y = complete year), podemos passar a hora também; H:i:s = Hora, interval (minutes), segundos.

``NOTE:`` Nossa data quando vier do banco de dados ela virá em formato internacional, e para consertarmos isso, para o usuário, podemos convertê-la em timestamp, em seguida pra data e nosso formato; ficando assim:

````

$data = '2023-05-19';
echo date('d-m-Y', strtotime($data));

````

*************************