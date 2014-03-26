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
	</div>
	<div class="col-md-6">
		<h3>Edycja cytatów</h3>
	</div>
</div>
