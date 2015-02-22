<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
  <meta name="description" content="">
  <meta name="author" content="Tyler -z- Mulligan">
  <link rel="icon" href="favicon.ico">

  <title>cvar and cmd viewer</title>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <script data-main="js/app" src="js/require.js"></script>
</head>

<body>

  <section id="wrap">

    <div class="page-header">
      <h1 class="text-primary"><i class="glyphicon glyphicon-list-alt"></i> cvar and cmd list</h1>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title">All cvars and cmds</h3></div>
      <div class="panel-body">

        <table id="cvar-cmd-list" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Description</th>
              <th>Default Value</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Description</th>
              <th>Default Value</th>
            </tr>
          </tfoot>
        </table>

      </div><!-- .panel-body -->
    </div><!-- .panel -->

    <h3 class="text-info">About</h3>
    <div class="alert alert-info">
      <p>This tool lists all cvars and cmds in the game.</p>
      <p>The data is extracted from the game with "cmdlist" and "cvarlist" and dumped into txt files with "condump".</p>
    </div>

  </section>
</body>
</html>
