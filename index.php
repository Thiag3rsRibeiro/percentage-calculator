<html lang="pt-br">
    <head>
        <meta chart="utf8">
        <link rel="stylesheet" href="estilo.css">
        <title>Calculadora de porcentagem</title>
    </head>
<body>
    <div class="titulo">
        <h1>Cálculo de porcentagem</h1>
    </div>
    <div class="corpo">
        <form method="post" action="">
          <h1>Digite o número</h1>
          <input type="Text" name="num"></input>
          <h1>Digite o Todo</h1>
          <input type="Text" name="todo"></input>
          <h1>Digite a porcentagem</h1>
          <input type="Text" name="por"></input>
          <input type="submit" name="calcular" value="Calcular"></input>
       </form>
       <?php
    if(isset($_POST['num']) or isset($_POST['todo']) or isset($_POST['por']))
    {
    $num=$_POST['num'];
    $todo=$_POST['todo'];
    $por=$_POST['por'];
    if($por=='')
    {
       $res=($num*100)/$todo;
       ?>
       <text style=" font-size: 2rem;"><?php echo $num.' equivale a ' .$res. '% de '.$todo ?></text>;
       <?php
    }
    if($todo=='')
    {
        $res=($num*100)/$por;
        ?>
        <text style=" font-size: 2rem;"><?php echo $res ?></text>;
        <?php
    }
    if($num=='')
    {
        $res=($todo*$por)/100;
        ?>
       <text style=" font-size: 2rem;"><?php echo $res ?></text>;
       <?php
    }
    } 
    ?>
    </div>

</body>