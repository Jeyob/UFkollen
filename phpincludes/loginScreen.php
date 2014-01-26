<div id="overlay" class="dialog-overlay" style="display: none;"></div>
    
    <div id="dialog" class="dialog-input" style="display: none;">
      <div class="dialog-header">
        <span class="float-right"><a id="closeBtn" href="#"><img height="20px" width="20px" src="img/close.png"></a></span>
      </div>

      <div class="dialog-content container">
      
      <form class="form-horizontal " method="post" action="login.php" role="form">
            <div class="form-group">
              <label for="Username" class="col-sm-2 control-label">Användarnamn</label>
              <div class="col-sm-10">
                <input id="Username" name="username" type="text" placeholder="Username" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="Password" class="col-sm-2 control-label">Lösenord</label>
              <div class="col-sm-10">
                <input id="Password" name="password" type="password" placeholder="Password" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Login</button>
              </div>
            </div>
        </form>
      </div>
    </div>