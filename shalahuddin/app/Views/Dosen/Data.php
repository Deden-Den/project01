<table border="1" width="600px" align="center" id="datamatkul">
    <thead class="thead-dark">
        <tr>
            <th width="30%">NIP</th>
            <th width="60%">Nama</th>
            <th width="10%">Jumlah Anak</th>
        </tr>
    </thead>
    <tbody>

        <?php

        foreach ($dosen->getResult() as $row) : ?>
            <tr>
                <td><?= $row->nip ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->jumlah_anak ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>