<?php
// Simple admin interface to create and activate a worldboss event

define('IN_ENGINE', true);
define('BASE_DIR', dirname(__DIR__));
define('SERVER_DIR', BASE_DIR.'/server');

require_once(SERVER_DIR.'/src/Utils/functions.php');
require_once(SERVER_DIR.'/src/Utils/field.php');
require_once(SERVER_DIR.'/src/Utils/autoloader.php');

\Srv\Config::__init();
\Srv\DB::__init();

$secretCfg = \Srv\Config::get('admin_secret');
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secret = $_POST['secret'] ?? '';
    if ($secret !== $secretCfg) {
        $message = 'Invalid secret';
    } else {
        $identifier = trim($_POST['identifier'] ?? '');
        $npc = trim($_POST['npc_identifier'] ?? '');
        $start = strtotime($_POST['start'] ?? '');
        $end = strtotime($_POST['end'] ?? '');
        $hp = intval($_POST['hitpoints'] ?? 0);

        if (!$identifier || !$npc || !$start || !$end || $hp <= 0) {
            $message = 'All fields are required';
        } else {
            $event = new \Schema\WorldbossEvent([
                'identifier' => $identifier,
                'npc_identifier' => $npc,
                'status' => 1,
                'ts_start' => $start,
                'ts_end' => $end,
                'npc_hitpoints_total' => $hp,
                'npc_hitpoints_current' => $hp
            ]);
            $event->save();

            \Srv\DB::table('character')->update([
                'worldboss_event_id' => $event->id,
                'worldboss_event_attack_count' => 0,
                'active_worldboss_attack_id' => 0
            ])->execute();

            $message = 'Worldboss event created with ID ' . $event->id;
        }
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Worldboss Admin</title>
</head>
<body>
<h1>Worldboss Admin</h1>
<?php if ($message): ?>
<p><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>
<form method="post">
    <label>Secret:<br><input type="password" name="secret"></label><br>
    <label>Identifier:<br><input type="text" name="identifier"></label><br>
    <label>NPC Identifier:<br><input type="text" name="npc_identifier"></label><br>
    <label>Start (YYYY-MM-DD HH:MM:SS):<br><input type="text" name="start"></label><br>
    <label>End (YYYY-MM-DD HH:MM:SS):<br><input type="text" name="end"></label><br>
    <label>Total Hitpoints:<br><input type="number" name="hitpoints" min="1"></label><br>
    <button type="submit">Create Event</button>
</form>
</body>
</html>
