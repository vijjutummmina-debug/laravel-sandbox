<x-message-banner msg="User Login successful" class="sucess"/><!--This is how u include a component-->
<x-message-banner msg="User signup successful" class="sucess"/>
<br><br><br>
<x-message-banner msg="password is incorrect please try again" class="error"/>
<x-message-banner msg="This is a warning message" class="warning"/>
<h1>Home page</h1>

<style>
    .sucess{
        background-color:lightgreen;
        color:green;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }

    .error{
        background-color:lightcoral;
        color:green;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    } 
    .warning{
        background-color:lightyellow;
        color:orange;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }
</style>