<?php echo validation_errors(); ?>


<?php if(!isset($societe) ){
    $societe = array( 'nomS' => "" , 'numS' => "" )  ; }
?>
<?php echo form_open('Deeveadee/create'); ?>
<br><br>
    <div class="create">
        <br><br><br>
            <table>
                <tr>
                    <td class="small"><label for="titre">Titre de la Societe</label></td>
                    <td><input type="input" value="<?php echo $societe['nomS']; ?>" name="titre"/></td>
                </tr>
                <br>
                <tr>
                    <td class="big"><label for="auteur">numéro de la Société</label></td>
                    <td><input type="input" value="<?php echo $book['numS']; ?>"name="numerosociete"/></td>
                </tr>
                <tr>
                    <td class="btn"><input type="submit" name="submit" value="Créer une nouvelle societe" /></td>
                </tr>
            </table>
    </div>
