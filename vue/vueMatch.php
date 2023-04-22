<h1 id="listArb">Liste des matchs</h1>
    <form id="formDate"action="?action=info" method="POST">

        
        <label style="color: aliceblue;">Choisissez votre date : </label>
        <input type="date" class="datepicker-input" name="datePicker" onChange="submit()" value=<?php echo $date ?>>
</form>