<?php
require_once __DIR__ . '/api/db.php';
$res = $mysqli->query("SELECT p.id,p.project_name,p.district,p.status, m.percent_complete, g.grant_name
  FROM projects p
  LEFT JOIN milestones m ON m.project_id = p.id AND m.sequence_no = (
    SELECT MIN(sequence_no) FROM milestones WHERE project_id = p.id AND status <> 'Completed')
  LEFT JOIN grants g ON g.id = p.grant_id
  GROUP BY p.id");
$projects = [];
if ($res) {
    while ($row = $res->fetch_assoc()) $projects[] = $row;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projects</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="topbar">
    <div class="logo">
      
    </div>
    <h1 class="headh1">Projects</h1>
    <a href="index.php" class="ancor">Back to Dashboard</a>
  </header>

  <main class="container">
    <table class="table">
      <thead><tr><th>Project</th><th>District</th><th>Status</th><th>Progress</th></tr></thead>
      <tbody>
        <?php foreach ($projects as $p): ?>
        <tr>
          <td><?= htmlspecialchars($p['project_name']) ?></td>
          <td><?= htmlspecialchars($p['district']) ?></td>
          <td><?= htmlspecialchars($p['status']) ?></td>
          <td><?= isset($p['percent_complete']) ? intval($p['percent_complete']) . '%' : '—' ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>
</html>
