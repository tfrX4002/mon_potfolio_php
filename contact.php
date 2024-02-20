<?php include 'header.php'; ?>

<section>
    <div class="contact">
        <h2>Contactez-moi</h2>
        <p>Si vous avez des questions ou des commentaires, n'hésitez pas à me contacter :</p>
        <div class="">
            <form action="process_contact.php" method="post">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required><br><br>
                
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="message">Message :</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br><br>
                
                <input type="submit" value="Envoyer">
            </form>

            <div>
                <ul>
                    <li>Email : <a href="fredryan.toure@gmail.com">mon@gmail</a></li>
                    <li>WhatsApp : <a href="https://wa.me/qr/PFECASLQMOFVE1">Mon WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>


