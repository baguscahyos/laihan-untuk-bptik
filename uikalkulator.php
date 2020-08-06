<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Hitung</title>
</head>
<body>   
    <div class="container-fluid">
        <div class="fixed-top"> <h3 class=" bg-dark text-white" >Masukkan bilangan</h3></div>
    
        <div class="jumbotron"> 
    <form class="form-inline">
     
        <div> 
            <div> 
                <input type="number" name="a" placeholder="Bilangan a" value="<?php echo @$_GET['a'] ?>">
                <input type="number" name="b" placeholder="Bilangan b" value="<?php echo @$_GET['b'] ?>">
            </div>
            
          
            <div style="margin-top: 1rem" >
                <select name="operator" >
                    <option <?php echo !@$_GET['operator'] ? 'selected' : '' ?> disabled>Pilih Operator</option>
                    <option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">Penjumahan</option>
                    <option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">Pengurangan</option>
                    <option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">Perkalian</option>
                    <option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">Pembagian</option>
                </select>
             </div>

             <div> 
                <button type="button" class="btn btn-warning" onclick="location.href = '?clear'">Clear</button>
                <button type="submit" class="btn btn-success"">Hitung</button>
             </div>
        </div>       
    </form>

<?php
if ($_GET):
    $a = (double) @$_GET['a'];
    $b = (double) @$_GET['b'];
    $operator = @$_GET['operator'];
    
    switch ($operator) {
        case '+':
            $hasil = $a + $b;
            break;
        case '-':
            $hasil = $a - $b;
            break;
        case '*':
            $hasil = $a * $b;
            break;
        case '/':
            $hasil = $a / $b;
            break;
    }
    ?>
 
    <div style="margin-top: 1rem">
         <input type="number" placeholder="Hasil" value="<?php echo $hasil ?>">
        
    </div>
    <?php
endif; ?>
  
   

</div>  
</div> 
</body>
</html>
