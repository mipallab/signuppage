<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">

    <pre>
        <?php
        print_r($_POST);
        ?>
     </pre>
    <div class="form w-[500px] mx-auto p-8 mt-10 shadow-lg bg-white rounded">

        <form action="" method="POST">
            <div class="item mb-4">
                <label for="fname">Full Name</label>
                <input
                    class="w-full mt-1 p-3 border rounded-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-yellow-400"
                    id="fname" type="text" name="fname">
            </div>
            <div class="item mb-4">
                <label for="phone">Phone</label>
                <input
                    class="w-full mt-1 p-3 border rounded-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-yellow-400"
                    id="phone" type="tel" name="phone">
            </div>
            <div class="item mb-4">
                <label for="email">Email</label>
                <input
                    class="w-full mt-1 p-3 border rounded-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-yellow-400"
                    id="email" type="email" name="email">
            </div>
            <div class="item mb-4">
                <label for="pass">Password</label>
                <input
                    class="w-full mt-1 p-3 border rounded-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-yellow-400"
                    id="pass" type="password" name="password">
            </div>
            <div class="item mb-4">
                <input
                    class="w-full mt-1 bg-yellow-400 p-3 border border-yellow-400 focus:border-border-yellow-500 focus:ring-5 focus:ring-yellow focus:bg-yellow-500"
                    type="submit" name="submit" value="Send">
            </div>


        </form>
    </div>

</body>

</html>