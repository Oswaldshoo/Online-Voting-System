<button class="open-button" onclick="openForm()">Add User</button>

<div class="form-popup" id="myForm">
  <form action="add_user.php" method ="POST" class="form-container">
    <h1>Add User</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Email" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Add User</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>