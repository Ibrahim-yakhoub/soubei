<?php
   $etudiant = 'Notes.index';
   $lien = 'Notes';
?>
<div>
	<h3>Liste des Etudiants</h3>
</div>
		<div>
			<div style="width: 100px;">
				<form method="POST" style="display: inline-block;">
					<div style="display: flex; justify-content: space-around; ">
						<div><?= $form->select("id_f", "filiere", $filiere) ?></div>
						<div><?= $form->select("id_mat", "Matiere", $matiere) ?></div>
						<div><?= $form->select("id_t", "Type", $type) ?></div>
						<button type="submit" class="btn btn-success" style="width: 100px; height: 30px; margin-top: 30px;">Choisir</button>
				   </div>
				</form>
				
			</div>
		</div>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>

			<td>Etudiant</td>
		
			<td>Matiere</td>
		
			<td>Type de la matiere</td>

			<td>Notes</td>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $key => $m): ?>
			<tr>
				<td><?= $m->id_dev_exa ?></td>
			
				<td><?= isset($m->nom_e) ? $m->nom_e: $m->id_e ?></td>
		
				<td><?= isset($m->nom_m) ? $m->nom_m: $m->id_mat ?></td>

				<td><?= isset($m->nom_t) ? $m->nom_t: $m->id_t ?></td>

				<td><?= $m->notes ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>