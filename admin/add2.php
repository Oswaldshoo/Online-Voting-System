<button class="open-button" onclick="openForm()">Add Candidate</button>

<div class="form-popup" id="myForm">
  <form action="add_candidate.php" method ="POST" class="form-container">
    <h1>Add Candidate</h1>

    <label for="email"><b>Candidate Id</b></label>
    <input type="text" placeholder="Candidate Id" name="cid" required>


    <label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter Email" name="fname" required>

    <label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Email" name="lname" required>

    <label for="email"><b>Position</b></label><br><br>
    <select name ="position">
    <option>-Select-</option>
    <option>President</option>
    <option>Vice-President</option>
    </select>
<br>
<br>
    <label for="email"><b>Level</b></label><br><br>
    <select name ="level">
    <option>-Select-</option>
    <option>1 st Year</option>
    <option>2 nd Year</option>
    <option>3 rd Year</option>
    </select>
    <br>
<br>

    <label for="email"><b>Value</b></label>
    <input type="text" placeholder="Enter Value" name="value" required>
<br>
    <button type="submit" class="btn">Add Candidate</button>
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