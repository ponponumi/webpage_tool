<?php

require_once __DIR__ . "/../parts/header.php";

?>

<p>テストテスト</p>
<p><?= htmlspecialchars($title->htmlGet()) ?></p>


<?php

require_once __DIR__ . "/../parts/footer.php";

?>
