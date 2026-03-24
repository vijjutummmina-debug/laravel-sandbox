<div>
    <h2>Add new User</h2>
    <form action="/add-user" method="POST">
        @csrf
        <div class="input-wrapper">
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="input-wrapper">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="input-wrapper">
            <label for="city">City:</label>
            <input type="text" id="city" placeholder="Enter city" name="city">
        </div>
        <button type="submit">Add User</button>

          <div class="input-wrapper">
            <h4>Users skills</h4>
            <input type="checkbox" name="skill[]" id="php" placeholder="Enter skill">
            <label for="php">PHP</label>
            <br>
            <input type="checkbox" name="skill[]" id="node" placeholder="Enter skill">
            <label for="node">Node.js</label>
            <br>

            <input type="checkbox" name="skill[]" placeholder="Enter skill" id="python">
            <label for="python">Python</label>

        </div>
        <br><br>
    </form>
    <!-- An unexamined life is not worth living. - Socrates -->
</div>

<style>
    input{
        border:1px solid orange;
        padding:5px 10px;
        border-radius:3px; 
        color:orange;
        height:30px;
        width: 200px;
    }
    .input-wrapper{
        margin:10px;
    }
    button{
        background-color:orange;
        color:white;
        border:none;
        padding:5px 10px;
        border-radius:3px; 
    }
</style>
