  <!-- --------------------------------gestion des categories--------------------------------- -->

                    <!-- ajouter categorie -->
                    <div id="creeCategorie" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:16vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerCC">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                            <h2>Ajouter Catégorie</h2>
                            <form method="POST" action="../categories/addCategorie" class="d-flex justify-content-center flex-column">
                                <label for="nomCategorie">Nom de Catégorie:</label>
                                <input type="text" id="nomCategorie" name="nomCategorie"><br>
                                <button class="btn btn-light btn-outline-dark bg-info" style="border-radius: 10px; width: 6vw" type="submit" name="creerCat">Ajouter</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <!-- modifier categorie -->
                    <div id="modifierCategorie" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:22vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerCM">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                        <h2>Modifier Catégorie</h2>
                        <form method="POST" action="../categories/modifierCategorie" class="d-flex justify-content-center flex-column">
                            <label>Sélectionnez la catégorie à modifier :</label>
                            <select id="idCategorieModification" name="selectCateegorie" class="form-control">
                                <?php
                                foreach($data["categories"] as $categorie) {
                                    echo "<option value='{$categorie->__get('idCategorie')}'>{$categorie->__get('nameCategorie')}</option>";
                                    }
                                ?>
                            </select><br>
                            <label for="nouveauNomCategorie">Nouveau nom de la catégorie :</label>
                            <input type="text" id="nouveauNomCategorie" name="nouveauCategorie" class="form-control"><br>
                            <button class="btn btn-light btn-outline-dark bg-info" style="border-radius: 10px; width: 6vw" type="submit" name="modifierCat">Modifier</button>
                        </form>
                        </div>
                        </div>
                    </div>
                    <!-- supprimer categorie -->
                    <div id="supprimerCategorie" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:16vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerCS">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                            <h2>Supprimer Catégorie</h2>
                            <form method="POST" action="../categories/supprimerCategorie" class="d-flex justify-content-center flex-column">
                            <label>Sélectionnez la catégorie à supprimer :</label>
                                <select id="idCategorieModification" name="selectCategorie" class="form-control">
                                    <?php
                                    foreach($data["categories"] as $categorie) {
                                        echo "<option value='{$categorie->__get('idCategorie')}'>{$categorie->__get('nameCategorie')}</option>";
                                        }
                                    ?>
                                </select><br>
                                <button class="btn btn-light btn-outline-dark" style="border-radius: 10px; width: 7vw; background-color:red" type="submit" name="supprimerCat">Supprimer</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <!-- --------------------------------gestion des tags--------------------------------- -->
                    <!-- ajouter tag -->
                    <div id="creeTag" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:16vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerTC">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                            <h2>Ajouter Tag</h2>
                            <form method="POST" action="../Tags/addTag" class="d-flex justify-content-center flex-column">
                                <label for="nomTag">Nom de Tag:</label>
                                <input type="text" id="nomTag" name="nomTag"><br>
                                <button class="btn btn-light btn-outline-dark bg-info" style="border-radius: 10px; width: 6vw" type="submit" name="creerTag">Ajouter</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <!-- modifier tag -->
                    <div id="modifierTag" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:22vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerTM">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                        <h2>Modifier Tag</h2>
                        <form method="POST" action="../Tags/modifierTag" class="d-flex justify-content-center flex-column">
                            <label>Sélectionnez la Tag à modifier :</label>
                            <select id="idTagModification" name="selectTag" class="form-control">
                                <?php
                                foreach($data["tags"] as $tag) {
                                    echo "<option value='{$tag->__get('idTag')}'>{$tag->__get('nameTag')}</option>";
                                    }
                                ?>
                            </select><br>
                            <label for="nouveauNomTag">Nouveau nom de la Tag :</label>
                            <input type="text" id="nouveauNomTag" name="nouveauTag" class="form-control"><br>
                            <button class="btn btn-light btn-outline-dark bg-info" style="border-radius: 10px; width: 6vw" type="submit" name="modifierTag">Modifier</button>
                        </form>
                        </div>
                        </div>
                    </div>
                    <!-- supprimer tag -->
                    <div id="supprimerTag" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:16vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerTS">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                            <h2>Supprimer Tag</h2>
                            <form method="POST" action="../Tags/supprimerTag" class="d-flex justify-content-center flex-column">
                            <label>Sélectionnez la Tag à supprimer :</label>
                                <select id="idTagModification" name="selectTag" class="form-control">
                                    <?php
                                    foreach($data["tags"] as $tag) {
                                        echo "<option value='{$tag->__get('idTag')}'>{$tag->__get('nameTag')}</option>";
                                        }
                                    ?>
                                </select><br>
                                <button class="btn btn-light btn-outline-dark" style="border-radius: 10px; width: 7vw; background-color:red" type="submit" name="supprimerTag">Supprimer</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <!-- -archiver Wiki- -->
                    <div id="archiverWiki" style=" display:none">
                        <div class="form-container bg-white d-flex flex-column align-items-center justify-content-center" style="border-radius:10px; width: 28vw; height:16vw;">
                        <div class="close-button " style="margin-top:-30px; margin-left:24vw; font-size: 26px; cursor:pointer" id="fermerWA'">X</div>
                        <div class="d-flex justify-content-center flex-column gap-3" style="margin-top: 0px;">
                            <h2>Archiver Wiki</h2>
                            <form method="POST" action="../Wikis/archiverWiki" class="d-flex justify-content-center flex-column">
                            <label>Sélectionnez Wiki à archiver :</label>
                                <select id="idWikiModification" name="selectWiki" class="form-control">
                                    <?php
                                    foreach($data["wikis"] as $wiki) {
                                        echo "<option value='{$wiki->__get('idWiki')}'>{$wiki->__get('nameWiki')}</option>";
                                        }
                                    ?>
                                </select><br>
                                <button class="btn btn-light btn-outline-dark" style="border-radius: 10px; width: 7vw; background-color:red" type="submit" name="archiverWiki">archiver</button>
                            </form>
                        </div>
                        </div>
                    </div>