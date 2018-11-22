 <!-- Section Table -->
 <div id="" class="container mb-5 mt-5">
        <div class="section-title col-md-12 ml-auto mr-auto">
            <h3 class="mb-4">Daftar Alumni Konsulat Jakarta</h3>
        </div>
    </div>

    <div class="container">
        <table class="table table-sm table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Id</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Angkatan</th>
                    <th class="text-center">Konsulat</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            foreach($jakarta as $a){ ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $a->id ?></td>
                    <td class="text-center"><?php echo $a->nama ?></td>
                    <td class="text-center">
                        <?php foreach($angkatan as $an){ ?>
                            <?php if($a->angkatan == $an->id): ?>
                                <?php echo $an->nama ?>
                            <?php endif; ?>
                        <?php } ?>
                    </td>
                    <td class="text-center">
                        <?php foreach($konsulat as $k){ ?>
                            <?php if($a->konsulat == $k->id): ?>
                                <?php echo $k->nama ?>
                            <?php endif; ?>    
                        <?php } ?>
                    </td>
                    <td class="text-center"></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
