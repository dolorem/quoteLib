<div class="row">
        <div class="col-md-6">
                <h3>Dodawanie tagów</h3>
		<form method="POST" action="/index.php/addTag" role="form">
			<div class="form-group">
				<label for="title">Nazwa</label>
				<input class="form-control" type="text" name="title" placeholder="nazwa" />
			</div>
			<button class="btn btn-default" action="send">Zapisz</button>
		</form>
        </div>
        <div class="col-md-6">
                <h3>Dodawanie cytatów</h3>
		<form method="POST" action="/index.php/addArticle" role="form">
                        <div class="form-group">
                                <label for="author">Autor</label>
                                <input class="form-control" name="author" placeholder="Autor" />
                        </div>
                        <div class="form-group">
                                <label for="content">Treść</label>
                                <textarea class="form-control" name="content" placeholder="Treść" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="source">Źródło</label>
                                <input class="form-control" name="source" placeholder="Źródło" />
                        </div> 
			<div class="form-group">
				<label for="tags">Tagi</label>
				<?=$tagMultiselect?>
			</div>
                        <button class="btn btn-default" action="send">Zapisz</button>
                </form>
        </div>
</div>

<div class="row">
	<div class="col-md-6">
		<h3>Edycja tagów</h3>
		<table class="table table-stripped">
		<tr>
			<th>Nazwa tagu</th>
			<th>Edytuj</th>
			<th>Usuń</th>
		</tr>
		<?php foreach ($tags as $tag): ?>
			<tr>
				<td><?=$tag->title?></td>
				<td><a href="#" class="editTag" id="et<?=$tag->tagId?>"><span class="glyphicon glyphicon-edit">&nbsp;</span></a></td>
				<td><a href="deleteTag?id=<?=$tag->tagId?>" class="delete"><span class="glyphicon glyphicon-remove">&nbsp;</span></a></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
	<div class="col-md-6">
		<h3>Edycja cytatów</h3>
		<table class="table table-stripped">
                <tr>
                        <th>Autor</th>
			<th>Treść</th>
			<th>Tagi</th>
                        <th>Edytuj</th>
                        <th>Usuń</th>
                </tr>
                <?php foreach ($quotes as $quote): ?>
                        <tr>
                                <td><?=$quote->author?></td>
				<td><?=$quote->content?></td>
				<td>
					<?php foreach ($quote->tags->find_all() as $tag): ?>
							<?=$tag->title.' '?>
					<?php endforeach; ?>
				</td>
				<td><a href="#" class="editQuote" id="eq<?=$quote->quoteId?>"><span class="glyphicon glyphicon-edit">&nbsp;</span></a></td>
				<td><a href="deleteQuote?id=<?=$quote->quoteId?>" class="delete"><span class="glyphicon glyphicon-remove">&nbsp;</span></a></td>
                        </tr>
                <?php endforeach; ?>
                </table>

	</div>
</div>
<div id="quoteEditModal" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			&nbsp;
		</div>
	</div>
</div>
<div id="tagEditModal" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="POST" action="editTag" role="form">
				<div class="form-group">
                        	        <label for="title">Nazwa</label>
                        	        <input class="form-control" name="title" placeholder="Nazwa" />
                        	</div>
				<input type="hidden" name="id" />
				<button type="submit" class="btn btn-primary">Zapisz</button>
				<button class="btn btn-default closeButton" type="button">Anuluj</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="/resources/jQuery.js"></script>
<script type="text/javascript" src="/resources/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="/resources/resources.js"></script>
