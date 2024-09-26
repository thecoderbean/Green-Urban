<fieldset>
    <div class="form-group">
        <label for="f_name">Name</label>
          <input type="text" name="name" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 
    <div class="form-group">
        <label for="f_name">Username</label>
          <input type="text" name="uname" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Username" class="form-control" required="required" id = "f_name" >
    </div> 
    <div class="form-group">
        <label for="f_name">Password</label>
          <input type="password" name="pass" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Password" class="form-control" required="required" id = "f_name" >
    </div> 
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>   

    
</fieldset>
