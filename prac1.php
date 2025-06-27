<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">

<?php
$name = $email = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);
}
?>

<form method="POST" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4 text-center text-blue-600">Student Registration</h2>

    <label for="name" class="block font-medium text-gray-700">Full Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>" required
           class="w-full p-2 border border-gray-300 rounded-lg mt-1 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400">

    <label for="email" class="block font-medium text-gray-700">Email</label>
    <input type="email" name="email" value="<?php echo $email; ?>" required
           class="w-full p-2 border border-gray-300 rounded-lg mt-1 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400">

    <label for="course" class="block font-medium text-gray-700">Course</label>
    <select name="course" required
            class="w-full p-2 border border-gray-300 rounded-lg mt-1 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">Select</option>
        <option value="B.Tech" <?php if ($course == "B.Tech") echo "selected"; ?>>B.Tech</option>
        <option value="BCA" <?php if ($course == "BCA") echo "selected"; ?>>BCA</option>
        <option value="MCA" <?php if ($course == "MCA") echo "selected"; ?>>MCA</option>
    </select>

    <div class="flex justify-between">
        <button type="submit" name="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500 font-semibold">Submit</button>
        <button type="reset"
                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-500 font-semibold">Reset</button>
    </div>
</form>

<?php if (!empty($name) && !empty($email) && !empty($course)): ?>
    <div class="bg-green-100 border border-green-400 text-green-800 p-4 mt-6 rounded-lg shadow-md w-full max-w-md">
        <h3 class="text-xl font-semibold mb-2">Registration Successful!</h3>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Course:</strong> <?php echo $course; ?></p>
    </div>
<?php endif; ?>

</body>
</html>
