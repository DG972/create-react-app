<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données du formulaire
    $name = htmlspecialchars(strip_tags($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags($_POST["subject"]));
    $message = htmlspecialchars(strip_tags($_POST["message"]));

    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Adresse email invalide.";
    } else {
        // Envoi de l'email
        $to = "davidgaillard250@gmail.com";  // Remplacez par votre adresse email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Si l'email a été envoyé avec succès
        if (mail($to, $subject, $message, $headers)) {
            $success = "Votre message a été envoyé avec succès.";
        } else {
            $error = "Une erreur est survenue. Veuillez réessayer plus tard.";
        }
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
    
        <nav>
            <ul class="nav">
                <li><a href="#profil">🏠 Accueil</a></li>
                <li><a href="#formation">🎓 Formation</a></li>
                <li><a href="#parcours">🛠️ Compétences</a></li>
                <li><a href="#projets">💡 Projets</a></li>
                <li><a href="#stages">🏢 Stages</a></li>
                <li><a href="#formulaire">✉️ Formulaire</a></li>
            </ul>
        </nav>
        <div class="info" id="profil" >
            
            <h1>David GAILLARD</h1>
            <h2>ÉTUDIANT EN BTS SIO - OPTION SISR</h2>
            <p>Bienvenue sur mon portfolio</p>
            
        </div>   

        <div class="profil">
            <h1>
                Profil
            </h1>
            <p> 
                
                Je m'appelle David Gaillard, j'ai 20 ans et je suis étudiant depuis deux ans au lycée Parc des Loges
                 à Évry-Courcouronnes (91). Actuellement en deuxième année en BTS SIO (Services Informatiques aux Organisations), spécialité SISR 
                 (Solutions d'Infrastructure, Systèmes et Réseaux), je me forme aux métiers de l’administration des systèmes et réseaux.
                  Mon objectif est de devenir technicien en data center, puis d’évoluer vers un poste en 
                  cybersécurité afin de contribuer à la protection des infrastructures informatiques.
            </p>

            <div class="carton">
                <p>Consultez mon cv</p>
            </div>
            <h2 id="formation">🎓 Formation</h2>

            <p class="text1">
                Je vous présente la formation que j'ai suivie et dans laquelle j'ai évolué pendant 2 ans.
            </p>
            
            <p class="text2">
                Le Brevet de Technicien Supérieur aux Services Informatiques aux Organisations (BTS SIO) s'adresse à ceux qui souhaitent se former en deux ans aux métiers d'administrateur réseau ou de développeur. Et ainsi par la suite intégrer directement le marché du travail ou continuer des études dans le domaine de l'informatique. Le BTS SIO propose deux spécialités.
            </p>
            
            <h2 class="text3">🖥️ Option SISR</h2>
            
            <div class="formation">
                <p>
                    L'acronyme SISR signifie « Solutions d’infrastructure, systèmes et réseaux ». L’option SISR est destinée aux étudiants qui s’orientent vers les métiers liés à la conception et la maintenance d’infrastructures réseaux. Assurer la sécurité, la maintenance et l’installation des réseaux et des équipements informatiques font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation. Des cours plus généraux viendront compléter la formation et apporter des compétences plus généralistes, permettant ainsi aux diplômés d’être opérationnels dans n’importe quelle entreprise.
                </p>
            
                <h3 class="subheading">💻 Option Solutions Logicielles et Applications Métiers (SLAM)</h3>
                <p>
                    Cette option est dédiée au développement et à la gestion de logiciels. Elle inclut :
                </p>
                <ul>
                    <li>Développement d’applications informatiques : Conception et programmation d’outils métiers.</li>
                    <li>Gestion de bases de données : Stockage, sécurisation et exploitation des données.</li>
                    <li>Conception et maintenance de logiciels : Développement et mise à jour de solutions adaptées aux besoins des entreprises.</li>
                </ul>
            
                <h3 class="subheading">📚 Matières Enseignées</h3>
                <p>Le BTS SIO se déroule sur deux ans et propose un enseignement technique et général afin de former des professionnels compétents.</p>
            
                <h4>🔧 Enseignements Techniques</h4>
                <ul>
                    <li>Conception et maintenance de solutions informatiques</li>
                    <li>Administration des réseaux</li>
                    <li>Développement d’applications</li>
                    <li>Sécurité informatique</li>
                    <li>Gestion de projet</li>
                </ul>
            
                <h4>📖 Enseignements Généraux</h4>
                <ul>
                    <li>Mathématiques appliquées</li>
                    <li>Anglais professionnel</li>
                    <li>Culture générale et expression</li>
                    <li>Économie et gestion des entreprises</li>
                </ul>
            
                <h3 class="subheading">📅 Programme détaillé</h3>
                <h4>Première Année</h4>
                <ul>
                    <li>Culture générale et expression</li>
                    <li>Anglais</li>
                    <li>Mathématiques appliquées à l’informatique</li>
                    <li>Méthodes et techniques informatiques</li>
                    <li>Environnement économique, juridique et managérial</li>
                </ul>
            
                <h4>Deuxième Année</h4>
                <ul>
                    <li>Projet personnalisé encadré</li>
                    <li>Conception et maintenance de solutions informatiques</li>
                    <li>Mise en œuvre et maintenance de solutions informatiques</li>
                    <li>Communication professionnelle</li>
                </ul>
            
                <h3 class="subheading">🏢 Stages et Projets</h3>
                <p>
                    Au cours du BTS SIO, les étudiants réalisent des stages en entreprise afin de mettre en pratique leurs connaissances et d’acquérir une expérience professionnelle concrète. En fin de cursus, un projet de fin d’études leur permet de démontrer leur capacité à concevoir et mettre en œuvre une solution informatique complète, en conditions réelles.
                </p>
            
                <h3 class="subheading">🔹 Mon Option : SISR (Solutions d’Infrastructure, Systèmes et Réseaux)</h3>
                <p>
                    J’ai choisi l’option SISR, qui me permet de me spécialiser dans la gestion et la sécurisation des infrastructures informatiques. Grâce à cette formation, j’ai acquis des compétences solides en :
                </p>
                <ul>
                    <li>Gestion et sécurisation des réseaux informatiques : Mise en place, administration et supervision des infrastructures réseau.</li>
                    <li>Maintenance et support technique : Gestion des incidents et optimisation des performances des systèmes informatiques.</li>
                    <li>Sécurité des infrastructures : Détection et prévention des vulnérabilités pour protéger les données et les utilisateurs.</li>
                    <li>Administration des systèmes : Gestion des serveurs, virtualisation et surveillance des ressources informatiques.</li>
                </ul>
            </div>
            

        </div>
        <div class="competences">
            <h2>💻 Compétences</h2>
            <p>
                Voici mes compétences en informatique, couvrant les systèmes d'exploitation, les réseaux, la virtualisation et le développement.
            </p>
        
            <!-- Langages Pratiqués -->
            <h2>Langages Pratiqués</h2>
            <ul class="nav2">
                <li><img src="./image/sql.png" class="icon"></li>
                <li><img src="./image/html.jpg" class="icon"></li>
                <li><img src="./image/php.png" class="icon"></li>
                <li><img src="./image/css.png" class="icon"></li>
                <li><img src="./image/python.png" class="icon"></li>
                <li><img src="./image/javascript.png" class="icon"></li>
                <li><img src="./image/java.png" class="icon"></li>
                <li><img src="./image/linux.png" class="icon"></li>
            </ul>
        
            <!-- Outils et Logiciels utilisés -->
            <h2>Outils / Logiciels Utilisés</h2>
            <ul class="nav3">
                <li><img src="./image/cisco.png" class="icon"></li>
                <li><img src="./image/virtual.png" class="icon"></li>
                <li><img src="./image/wamp.png" class="icon"></li>
                <li><img src="./image/word.jpg"class="icon"></li>
                <li><img src="./image/visual.png"class="icon"></li>
                <li><img src="./image/slack.png"class="icon"></li>
                <li><img src="./image/Phpmyadmin.png"class="icon"></li>
                <li><img src="./image/trello.png"class="icon"></li>
                <li><img src="./image/ocsinventory.png"class="icon"></li>
                <li><img src="./image/excel.png"class="icon"></li>
                <li><img src="./image/power.jpg"class="icon"></li>
                <li><img src="./image/eclispe.png"class="icon"></li>
            </ul>
        
            <!-- Compétences -->
<h2>Réseau</h2>
<div class="competence-container">
    <div class="competence-box">
        <h2>🖥️ Systèmes d'exploitation</h2>
        <ul>
            <li>🐧 <strong>Linux :</strong> Système open source pour serveurs et infrastructures.</li>
            <li>🪟 <strong>Windows :</strong> Système propriétaire de Microsoft, dominant sur les PC.</li>
            <li>📱 <strong>Android :</strong> OS mobile open source développé par Google.</li>
        </ul>
    </div>

    <div class="competence-box">
        <h2>🌐 Réseau</h2>
        <ul>
            <li>📡 <strong>Protocoles :</strong> Règles définissant la communication réseau (ex : TCP/IP).</li>
            <li>📍 <strong>Adressage :</strong> Attribution d’adresses IP uniques aux appareils.</li>
            <li>🚦 <strong>Routage :</strong> Sélection du chemin optimal pour l’envoi des données.</li>
        </ul>
    </div>

    <div class="competence-box">
        <h2>🖥️ Virtualisation</h2>
        <ul>
            <li>🖥️ <strong>Virtualisation :</strong> Exécution de plusieurs systèmes sur une seule machine.</li>
            <li>🔧 <strong>VirtualBox :</strong> Outil permettant de créer et gérer des machines virtuelles.</li>
        </ul>
    </div>
</div>
        
            <!-- Diplômes et Certifications -->
<div class="parcours" id="parcours">
    <h2>Certifications</h2>
    <p>
        Au cours de mon cursus, j'ai obtenu plusieurs certifications listées ci-dessous.
    </p>
    
    <div class="certification-container">
        <div class="card-certifications">
            <a href="./image/secnum.pdf">
                <h2>📜 SecNum Académie</h2>
            </a>
        </div>

        <div class="card-certifications">
            <a href="./image/aws.pdf">
                <h2>📜 AWS Academy</h2>
            </a>
        </div>

        <div class="card-certifications">
            <a href="./image/cisco.pdf">
                <h2>📜 Cisco Networking</h2>
            </a>
        </div>

        <div class="card-certifications">
            <a href="./image/atelier.pdf">
                <h2>📜 Atelier RGPD</h2>
            </a>
        </div>

        <div class="card-certifications">
            <a href="lien_vers_OpenClassrooms.html">
                <h2>📜 OpenClassroom</h2>
            </a>
        </div>
    </div>

    </div>
</div>

        </div>
        <div class="Projets" id="projets">
            <h2>Mes Projets</h2>
            <p>Vous retrouverez tous mes projets réalisés au cours de mon parcours de formation</p>
            
            <p>1ère Année</p>
            <div class="card-container">
                <div class="card2">
                    <a href="./vielle technologique/html1veille.html">
                        <img src="./image/veilletechno.jpeg" alt="Veille Technologique">
                    </a>
                </div>
                <div class="card2">
                    <a href="./HTML/veille2.html">
                        <img src="./image/marchand.jpeg" alt="Marchand">
                    </a>
                </div>
            </div>
        
            <p>2ème Année BTS SIO</p>
            <div class="projets-2eme-annee">
                <div class="card3">
                    <a href="./image/raspberry.pdf">Raspberry</a>
                </div>
                <div class="card3">
                    <a href="./image/cw91 e5.pdf">CW91</a>
                </div>
                <div class="card3">
                    <a href="./image/logesimmo.pdf">Logesimmo</a>
                </div>
            </div>
        </div>
        <div class="entreprise" id="stages">
            <h2>Stages</h2>
            <p>Les 2 stages réalisés au cours de ma formation.</p>
            
            <h3>Expériences professionnelles</h3>
        
            <!-- Stage 1ère année - Veepee -->
            <div class="stage-container">
                <img src="./image/veepee.jpg" alt="Logo Veepee" class="stage-logo">
                <div class="stage-content">
                    <h4>Stage Veepee</h4>
                    <p class="text1"><strong>Présentation de l'entreprise :</strong>  
                        Veepee est une entreprise française de commerce électronique. Créée en 2001, elle propose des ventes événementielles en ligne.
                    </p>
                    <p class="text1"><strong>Thème :</strong> Développement de site web.</p>
                    <p class="text1"><strong>Problématique :</strong>  
                        En quoi la refonte de ces sites web pour diverses entreprises permet-elle de valoriser leurs images de marque tout en renforçant mes compétences techniques en développement informatique ?
                    </p>
                    <p class="text1"><strong>Mission principale :</strong> Refaire d’anciennes maquettes de site web.</p>
                    <p class="text1"><strong>Missions annexes :</strong>  
                        Terminer les maquettes demandées, aide support OpenClassrooms (jeux ludiques et vidéos HTML/CSS/JavaScript).
                    </p>
                    <p class="text1"><strong>Réalisations :</strong> Réalisation d’un site web avec Vue.js.</p>
                    <a href="rapport_stage_veepee.pdf" class="btn-rapport">Voir le rapport de stage</a>
                </div>
            </div>
        
            <!-- Stage 2ème année -->
            <div class="stage-container">
                <img src="./image/sundata.jpeg" alt="Logo Entreprise 2" class="stage-logo">
                <div class="stage-content">
                    <h4>Stage 2ème année - sundata</h4>
                    <p class="text1"><strong>Présentation de l'entreprise :</strong>sundata.</p>
                    <p class="text1"><strong>Thème :</strong> réparation de pc</p>
                    <p class="text1"><strong>Problématique :</strong>comment répondre au divers problématique </p>
                    <p class="text1"><strong>Mission principale :</strong>configuration de pc</p>
                    <p class="text1"><strong>Missions annexes :</strong> installation d'antivirus</p>
                    <p class="text1"><strong>Réalisations :</strong>montages de pc </p>
                    <a href="rapport_stage_2eme_annee.pdf" class="btn-rapport">Voir le rapport de stage</a>
                </div>
            </div>
        </div>
        <div class="techno" id="veille">
            <h1>Veille Technologique</h1>
        
            <!-- Introduction -->
            <section class="techno-section">
                <h2>Introduction à la veille technologique</h2>
                <p>
                    La veille technologique ou veille scientifique et technique est un processus cyclique de gestion de l'information, 
                    tendant à l'automatisation, qui a pour objectif de connaître les nouveautés et les tendances dans les domaines 
                    scientifiques et techniques.
                </p>
            </section>
        
            <!-- Thème -->
            <section class="techno-section">
                <h2>Thème : Les technologies qui révolutionnent la simulation médicale</h2>
                <p>
                    L'intérêt de ce thème réside dans l'étude de la simulation médicale avec les mannequins. Cette technologie permet 
                    aux apprentis médecins de pratiquer dans des environnements contrôlés, en reproduisant des situations cliniques réelles.
                </p>
            </section>
        
            <!-- Explications générales -->
            <section class="techno-section">
                <h2>Explications générales des mannequins pour les apprentis médecins</h2>
                <p>
                    Les mannequins de simulation médicale reproduisent les réactions physiologiques humaines, offrant une 
                    expérience immersive. Ils permettent aux étudiants de pratiquer des interventions complexes et de développer leurs compétences cliniques.
                </p>
            </section>
        
            <!-- Utilisation -->
            <section class="techno-section">
                <h2>Utilisation de la simulation médicale pour les apprentis</h2>
                <ul>
                    <li>✅ Pratique sécurisée : répéter des procédures sans risque pour les patients.</li>
                    <li>✅ Feedback immédiat : correction en temps réel des performances.</li>
                    <li>✅ Préparation aux urgences : scénarios simulés pour entraîner les réactions aux urgences.</li>
                </ul>
            </section>
        
            <!-- Conclusion -->
            <section class="techno-section">
                <h2>Conclusion</h2>
                <p>
                    En conclusion, la veille technologique dans le domaine de la simulation est essentielle pour intégrer les 
                    dernières innovations dans la formation des professionnels de santé. Les avancées technologiques, comme 
                    la réalité virtuelle et l'intelligence artificielle, révolutionnent la simulation médicale pour une 
                    formation optimale.
                </p>
            </section>
        
            <!-- Ressources -->
            <section class="techno-section">
                <h2>Ressources récentes sur la simulation médicale</h2>
                <ul>
                    <li>📚 <a href="https://www.medtechfrance.fr/actualites/grand-angle/les-nouvelles-technologies-medicales-a-suivre-en-2025" target="_blank">
                        Les nouvelles technologies médicales à suivre en 2025
                    </a></li>
                    <li>📚 <a href="https://innov2learn.ca/fr/limpact-de-la-technologie-dans-la-simulation-medicale" target="_blank">
                        L’impact de la technologie dans la simulation médicale
                    </a></li>
                    <li>📚 <a href="https://www.medicalem.com/actualite-simulation-medicale/ces-technologies-qui-revolutionnent-la-simulation-medicale" target="_blank">
                        Ces technologies qui révolutionnent la simulation médicale
                    </a></li>
                </ul>
            </section>
        </div>
        
        <div class="contact">
            <h1>Contact</h1>
            <p>
                N’hésitez pas à me contacter pour toutes questions 
                ou renseignements complémentaires via ce formulaire.
            </p>
        </div>
        
        <div class="card4" id="formulaire">
            <h2>Formulaire de contact</h2>
            <form action="index.php" method="post">
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" placeholder="Votre nom" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>
        
                <label for="subject">Sujet:</label>
                <input type="text" id="subject" name="subject" placeholder="Sujet de votre message" required>
        
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
        
                <button type="submit">Envoyer</button>
            </form>
        </div>
        
    
              
    </body>
</html>
