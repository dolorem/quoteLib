<form method="POST" action="editQuote" role="form">
                                <input type="hidden" name="id" value="<?=$quote->quoteId?>"/>
<div class="form-group">
                                <label for="author">Autor</label>
                                <input class="form-control" name="author" placeholder="Autor" value="<?=$quote->author?>" />
                        </div>
                        <div class="form-group">
                                <label for="content">Treść</label>
                                <textarea class="form-control" name="content" placeholder="Treść" rows="10"><?=$quote->content?></textarea>
                        </div>
                        <div class="form-group">
                                <label for="source">Źródło</label>
                                <input class="form-control" name="source" placeholder="Źródło" value="<?=$quote->source?>"/>
                        </div>
                        <div class="form-group">
                                <label for="tags">Tagi</label>
                                <?=$tagMultiselect?>
                        </div>
                        <button class="btn btn-primary" action="send">Zapisz</button>
                                <button class="btn btn-default closeButton" type="button">Anuluj</button>
                    </form>

