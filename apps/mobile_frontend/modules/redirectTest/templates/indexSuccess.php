<?php echo form_tag('redirectTest/index') ?>

リダイレクトテスト<br />
下記のフィールドのURLを確認し、「送信」ボタンを押してください。<br />
<br />

<input type="text" name="redirectUrl" value="<?php echo url_for('redirectTest/url', array('absolute' => true)) ?>" />

<br >

<input type="submit" name="submit" value="送信" />

<br />

</form>

