
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="panel-heading">
            <h3>Zoznam študentov</h3>
        </div>
        <div class="panel-body">
            <table id="artists" class="table table-hover">
                <thead>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Meno</b></td>
                    <td><b>Priezvisko</b></td>

                    <td><b>Vek</b></td>
                    <td><b>Celkovy Zarobok</b></td>
                    <td><b>Pohlavie</b></td>
                    <td><b>Zaujem</b></td>
                    <td><b>Adresa</b></td>

                </tr>
                </thead>
                <tbody>

                <ul>
                    <?php foreach ($studenti1->result() as $obj) : ?>
                        <tr>
                            <td><?= ($obj->	idStudent) ?></td>
                            <td><?= ($obj->Meno) ?></td>
                            <td><?= ($obj->Priezvisko) ?></td>
                            <td><?= ($obj->Vek) ?></td>
                            <td><?= ($obj->Celkovy_zarobok) ?></td>
                            <td><?= ($obj->Pohlavie) ?></td>
                            <td><?= ($obj->Zaujem) ?></td>
                            <td><?= ($obj->Adresa) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </ul>

                </tbody>
            </table>
        </div>



    </div>
</div>>
