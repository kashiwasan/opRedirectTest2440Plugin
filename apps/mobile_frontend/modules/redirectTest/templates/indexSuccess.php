<?php echo form_tag('redirectTest/index') ?>

リダイレクトテスト<br />
下記のフィールドのURLを確認し、「送信」ボタンを押してください。<br />
<br />
【Cookieが対応していない端末】<br />
* http:// から始まるURL (セッションIDが付与されない)<br />
* symfony の内部URL ( member/search や @member_profile_mine → セッションIDが付与される) <br />
<br />
【Cookieに対応している端末】<br />
* http:// から始まるURL (セッションIDが付与されない)<br />
* symfony の内部URL ( member/search や @member_profile_mine → セッションIDが付与されない)<br />
<br />
<input type="text" name="redirectUrl" value="" />

<br >

<input type="submit" name="submit" value="送信" />

<br />

</form>

