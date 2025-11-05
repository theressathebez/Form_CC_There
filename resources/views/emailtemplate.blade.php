<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Feedback Has Been Received</title>
</head>

<body style="margin:0; padding:0; background-color:#f3f4f6; font-family:'Segoe UI', Arial, sans-serif;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
        style="background-color:#f3f4f6; padding:40px 0;">
        <tr>
            <td align="center">
                <table role="presentation" cellpadding="0" cellspacing="0" width="600"
                    style="background-color:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:linear-gradient(135deg, #D183A9, #4B1535); padding:40px 20px;">
                            <h1 style="color:#ffffff; font-size:26px; margin:16px 0 8px; font-weight:700;">
                                Cloud Computing 2025
                            </h1>
                            <p style="color:#fce7f3; font-size:15px; margin:0;">
                                Registration Confirmation 💗
                            </p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:40px 20px 30px 30px; text-align:center;">
                            <h2 style="color:#111827; font-size:20px; margin-bottom:10px;">
                                Hello, <span style="color:#D183A9;">{{ $name }}</span> 👋
                            </h2>
                            <p style="color:#4b5563; font-size:15px; line-height:1.6; margin:0 0 20px;">
                                Congratulations! You have successfully registered for <strong>Cloud Computing
                                    2025</strong>. <br>
                                We're excited to have you join our program!
                            </p>

                            <table cellpadding="0" cellspacing="0" width="100%"
                                style="margin-top:24px; background-color:#f9fafb; border-radius:10px; border:1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding:16px 20px; text-align:left;">
                                        <h3
                                            style="color:#4B1535; font-size:16px; margin:0 0 12px; font-weight:700; display:flex; align-items:center;">
                                            Registration Details 🗂️
                                        </h3>
                                        <p style="color:#374151; font-size:14px; margin:4px 0;">
                                            <strong>Full Name:</strong> {{ $name }}
                                        </p>
                                        <p style="color:#374151; font-size:14px; margin:4px 0;">
                                            <strong>Email:</strong>
                                            <a href="mailto:{{ $email }}"
                                                style="color:#D183A9; text-decoration:none;">{{ $email }}</a>
                                        </p>
                                        <p style="color:#374151; font-size:14px; margin:4px 0;">
                                            <strong>Birth of Date:</strong> {{ $birth_of_date }}
                                        </p>
                                        <p style="color:#374151; font-size:14px; margin:4px 0;">
                                            <strong>Course:</strong> Cloud Computing 2025
                                        </p>
                                    </td>
                                </tr>
                            </table>


                            <p style="color:#4b5563; font-size:14px; line-height:1.6; margin:0 0 24px; margin-top:6px;">
                                To complete your registration and confirm your spot in the program. Please click the
                                button below🌸:
                            </p>

                            <!-- Button -->
                            <a href="https://www.there.vexel.my.id/"
                                style="display:inline-block; background:linear-gradient(135deg, #D183A9, #4B1535); color:#ffffff; padding:12px 28px; border-radius:8px; font-weight:600; text-decoration:none; font-size:15px; margin-top:6px;">
                                Confirm My Registration
                            </a>

                            <p style="color:#6b7280; font-size:12px; margin-top:20px;">
                                <strong>Important:</strong> Please confirm your registration within 7 days to secure
                                your spot in the program.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color:#f9fafb; padding:20px;">
                            <p style="color:#9ca3af; font-size:13px; margin:0;">
                                © {{ date('Y') }} <strong style="color:#D183A9;">There Platform</strong>. All rights
                                reserved.<br>
                                If you have any questions, please contact us at <a href="https://www.there.vexel.my.id/">support@there.vexel.my.id</a>💜
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>
