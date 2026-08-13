<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Job Application</title>
 
</head>
 
<body>
 
<div class="container">
 
    <h1>Online Job Application</h1>
    <p class="subtitle">Apply for your desired position</p>
 
    <form action="process.php" method="POST" enctype="multipart/form-data">
 
        <label for="applicant_id">Applicant ID</label>
        <input type="text" id="applicant_id" name="applicant_id"
               placeholder="Enter Applicant ID">
</br></br>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name"
               placeholder="Enter your full name">
 </br></br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"
               placeholder="example@gmail.com">
 </br></br>
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone"
               placeholder="">
 </br></br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"
               placeholder="Minimum 6 characters">
 </br></br>
        <label>Gender</label>
 
        <div class="gender">
            <label>
                <input type="radio" name="gender" value="Male">
                Male
            </label>
 
            <label>
                <input type="radio" name="gender" value="Female">
                Female
            </label>
        </div>
 </br></br>
        <label for="position">Job Position</label>
 
        <select name="position" id="position">
            <option value="">-- Select Position --</option>
            <option value="Software Developer">Software Developer</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Database Administrator">Database Administrator</option>
            <option value="Network Engineer">Network Engineer</option>
        </select>
 </br></br>
        <label for="qualification">Educational Qualification</label>
 
        <input type="text" id="qualification" name="qualification"
               placeholder="Example: BSc in CSE">
 </br></br>
        <label for="address">Address</label>
 
        <textarea id="address" name="address"
                  placeholder="Enter your address"></textarea>
 </br></br>
        <label for="cv">CV Upload</label>
 
        <input type="file" id="cv" name="cv"
               accept=".pdf,.doc,.docx">
 </br></br>
        <p class="note">
            Allowed formats: PDF, DOC, DOCX | Maximum size: 2 MB
        </p>
 </br></br>
        <button type="submit" class="submit-btn">
            Submit Application
        </button>
 
    </form>
 
</div>
 
</body>
</html>