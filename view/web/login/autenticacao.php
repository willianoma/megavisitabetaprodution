
<div style="
     width:500px; 
     height:200px; 
     position:absolute; 
     top:50%; 
     margin-top:-200px;
     left:50%;
     margin-left:-400px;
     ">

    <div style="
         background: #eeeeee;
         border: black;
         border-style: solid; 
         border-width: 3px;
         border-radius: 20px;
         padding: 13px;
         width: 290px;
         height: 220px;
         margin-left: 50%;
         text-align: center;

         ">
        <form method="POST"  action="?controller=Login&acao=autenticar">


            <p style="font-weight: bold; font-size: 20px; font-family: monospace; background-color: #ffffff; height: 45px; padding-top: 10px; border-radius: 8px ">Login</p>
            <div class="input-group" style="padding-bottom: 5px">

                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" name="email" placeholder="E-mail" style="width: 100%;">
            </div>

            <div class="input-group">
                <span class="input-group-addon">***</span>
                <input type="password" name="senha" class="form-control"  placeholder="Password" style="width: 100%">
            </div>


            <input type="submit"  value="Logar" class="btn btn-default" style="width: 100%; margin-top: 10px; height: 40px; border-radius: 8px">

        </form>
    </div>
</div>