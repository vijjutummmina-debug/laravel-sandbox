<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
     <h1>Add new user</h1>
     <form action="" method="post">
        @csrf
        <div>
            <h4>Users skills</h4>
            <input type="checkbox" name="skill" placeholder="Enter skill" id="php">
            <label for="php">PHP</label>
            <br>
            <input type="checkbox" name="skill" placeholder="Enter skill" id="node">
            <label for="node">Node.js</label>
            <br>

            <input type="checkbox" name="skill" placeholder="Enter skill" id="python">
            <label for="python">Python</label>

        </div>
        <br><br>

        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <br>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
            <br>
        </div>

        <div>
            <h4>city</h4>
            <select name="city" id="city">
                <option value="">Select city</option>
                <option value="newyork">New York</option>
                <option value="london">London</option>
                <option value="paris">Paris</option>
            </select>
        </div>

        <div>
            <h4>Age</h4>
            <input type="range" name="age" id="age" min="18" max="60">
        </div>
        <button>Add new user</button>
    
     </form>
</div>
