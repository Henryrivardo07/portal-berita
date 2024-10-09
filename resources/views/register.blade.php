<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <section>
        <h1>Buat Account Baru!</h1>

        <h1>Sign Up Form</h1>
        <form action="{{ route('processRegister') }}" method="POST">
            @csrf

            <!-- First Name -->
            <label for="first-name">First Name:</label>
            <br />
            <input type="text" id="first-name" name="first_name" required />
            <br />

            <!-- Last Name -->
            <label for="last-name">Last Name:</label>
            <br />
            <input type="text" id="last-name" name="last_name" required />
            <br />

            <!-- Gender -->
            <label>Gender:</label>
            <br />
            <input type="radio" id="male" name="gender" value="male" required />
            <label for="male">Male</label>
            <br />
            <input type="radio" id="female" name="gender" value="female" required />
            <label for="female">Female</label>
            <br />
            <input type="radio" id="other" name="gender" value="other" required />
            <label for="other">Other</label>
            <br />

            <!-- Nationality -->
            <label for="nationality">Nationality:</label>
            <br />
            <select id="nationality" name="nationality" required>
                <option value="indonesian">Indonesian</option>
                <option value="foreigner">Foreigner</option>
            </select>
            <br />

            <!-- Language Spoken -->
            <label for="language">Language Spoken:</label>
            <br />
            <input type="checkbox" id="language-bahasa" name="language[]" value="Bahasa Indonesia" />
            <label for="language-bahasa">Bahasa Indonesia</label>
            <br />
            <input type="checkbox" id="language-english" name="language[]" value="English" />
            <label for="language-english">English</label>
            <br />
            <input type="checkbox" id="language-others" name="language[]" value="Others" />
            <label for="language-others">Others</label>
            <br />

            <!-- Bio -->
            <label for="bio">Bio:</label>
            <br />
            <textarea id="bio" name="bio" required style="height: 100px"></textarea>
            <br />

            <!-- Submit Button -->
            <button type="submit">Sign Up</button>
        </form>
    </section>
</body>
</html>
