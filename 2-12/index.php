<form action="result.php" method="post">
    
        <!-- この中にinputタグを記述していきます。 --> 
    お名前：<input type="text" name="my_name"/>
    
    <br>
    
    ご希望商品：
        <input type="radio" name="gift" value="A賞"/>A賞
        <input type="radio" name="gift" value="B賞"/>B賞
        <input type="radio" name="gift" value="C賞"/>C賞
    
    <br>

    個数：
    <select name="count">
        <?php for ($i=1;$i<=10;$i++){ ?>
            <option value ="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
        <?php } ?>
        </select>
    <br>
        <input type="hidden" name="hidden_param" value="隠しパラメーターから"/>
        <input type="submit" value="申込" />
    </form>