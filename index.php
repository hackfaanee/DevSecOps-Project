<?php
// ⚠️ Intentionally vulnerable code for SonarQube testing

// Dangerous use of eval (SonarQube flags this by default)
$code = 'echo "Hello, Hacked!";';
eval($code);   // 🔴 Rule: "Make sure that using 'eval' is safe here."

// Dangerous use of system() (command injection possible)
$user_input = $_GET['cmd'];
system($user_input);   // 🔴 Rule: "Masdake sure that using 'system' is safe here."

// Insecure file inclusion
$file = $_GET['page'];
include($file);  // 🔴 Rule: "Make sure this dynamic inclusion is safe here."

?>
