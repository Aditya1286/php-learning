<?php
$email="user@example.com<script>alert('Hacked!');</script>;
$sanitized_email=filter_var($email,Filter_sanitize_Email);
echo $sanitized_email;
?>