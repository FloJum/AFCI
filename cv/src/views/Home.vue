<template>
  <div class="Accueil">
     <div class="row">
        <div class="col-9 offset-1 mb-3">Mon nom est</div>
        <h5 class="col-9 offset-2 col-lg-10 offset-lg-2 mb-3">
          Florian Jumeaucourt
        </h5>
        <div class="col-9 offset-1 col-lg-8 offset-lg-4 mb-3">Je suis un</div>
        <h5 class="col-9 offset-2 col-lg-7 offset-lg-5 mb-3">Développeur Web</h5>
        <div class="col-9 offset-3 col-lg-6 offset-lg-6">
          créant des conceptions modernes et adaptatives.
        </div>
      </div>

      <a
        class="cvdl"
        href="https://drive.google.com/file/d/1HFC1DUBYg5HwqcWSFg6LZ7qrcadaYW3h/view?usp=sharing"
        >Mon CV
        <!-- <img
          src="../public/img/fond/_ionicons_svg_md-download.svg"
          alt="Télécharger le CV"
      /> -->
      </a>

    <main class="container-fluid" id="ancre1">
      <h4 class="text-center ">À propos de moi</h4>
      <h5>
        Actuellement en formation pour devenir
        <strong> développeur web</strong>, je suis prêt à mettre mes compétences
        à votre service pour vos projets Internet.
      </h5>
      <p class="px-5">
        Dans le cadre de ma formation professionnelle, je recherche un stage de
        développeur web dans la période <strong>du XX mai 2020 au X août 2020</strong> afin
        d'acquérir de l'expérience professionnelle et d'enrichir mes
        compétences en tant que développeur fullstack.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure,
        voluptatem.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure,
        voluptatem.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure,
        voluptatem.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure,
        voluptatem.
      </p>

      <div class="row">
        <a href="CV.html" class="cadrecv col-12 col-lg-6"
          ><h5>Accéder à mon CV</h5>
          <h6>
            Pour en savoir plus sur mes compétences, les langages et logiciels que je maitrise, mes formations et diplômes, ou mes expériences professionnelles cliquez ici.
          </h6>
        </a>

        <a href="#" class="cadresite col-12 col-lg-6"
          ><h5>Mes sites</h5>
          <h6>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam numquam veritatis minima deserunt, vitae debitis.
          </h6></a
        >
      </div>

      <div class="row">
        <div class="col-12 col-lg-6 p-3 contact">
          <h5>Vous désirez me contacter ?</h5>
          <h5>Me proposer un projet ?</h5>
          <p>
            Vous pouvez utiliser le formulaire de contact ou me joindre en
            utilisant un des boutons ci-dessous.
          </p>
          <!-- <a class="icontel" href="tel:+33609491005">
            <img class="" src="../public/img/tel.png" alt="Télécharger le CV"
          /></a>
          <a href="mailto:fjumeaucourt@gmail.com">
            <img class="" src="../public/img/email-icon.png" alt="Télécharger le CV"
          /></a> -->
        </div>

        <form class="formulaire p-0 col-lg-6">
          <div class="row align-items-baseline" id="formcont">
            <h5 class="col-7 offset-1 pr-0">Formulaire de contact :</h5>
            <h6 class="col-4 text-center small pl-0 ">* champ obligatoire</h6>
          </div>
          <div class="form-row mx-0">
            <label
              for="nominput"
              class="col-11 offset-1 col-md-8 offset-md-2 col-lg-3 offset-lg-1 my-lg-auto"
              >Nom* :</label
            >
            <input
              type="text"
              class="form-control col-10 offset-1 col-md-8 offset-md-2 col-lg-7 offset-lg-0"
              id="nominput"
              placeholder="Votre nom"
              required
            />
          </div>
          <div class="form-row mx-0">
            <label
              for="socinput"
              class="col-11 offset-1 col-md-8 offset-md-2 col-lg-3 offset-lg-1 my-lg-auto"
              >Société :</label
            >
            <input
              type="text"
              class="form-control col-10 offset-1 col-md-8 offset-md-2 col-lg-7 offset-lg-0"
              id="socinput"
              placeholder="Nom de votre société"
            />
          </div>
          <div class="form-row mx-0">
            <label
              for="phoneinput"
              class="col-11 offset-1 col-md-8 offset-md-2 col-lg-3 offset-lg-1 my-lg-auto"
              >Téléphone :</label
            >
            <input
              type="tel"
              class="form-control col-10 offset-1 col-md-8 offset-md-2 col-lg-7 offset-lg-0"
              id="phoneinput"
              placeholder="Numéro de téléphone"
            />
          </div>
          <div class="form-row mx-0 ">
            <label
              for="emailinput"
              class="col-11 offset-1 col-md-8 offset-md-2 col-lg-3 offset-lg-1 my-lg-auto"
              >Adresse mail* :</label
            >
            <input
              type="email"
              class="form-control col-10 offset-1 col-md-8 offset-md-2 col-lg-7 offset-lg-0"
              id="emailinput"
              placeholder="nom@exemple.com"
              required
            />
          </div>
          <div class="form-row mx-0">
            <label
              for="fichinput"
              class="col-11 offset-1 col-md-8 offset-md-2 col-lg-3 offset-lg-1 my-lg-auto"
              >Joindre un fichier :</label
            >
            <input
              type="file"
              class="form-control col-10 offset-1 col-md-8 offset-md-2 col-lg-7 offset-lg-0"
              id="fichinput"
            />
          </div>
          <div class="form-row mx-0">
            <label
              for="messinput"
              class="col-11 offset-1 col-md-8 offset-md-2 col-lg-3 offset-lg-1 my-lg-auto"
              >Votre message :</label
            >
            <textarea
              class="form-control col-10 offset-1 col-md-8 offset-md-2 col-lg-7 offset-lg-0"
              id="messinput"
              rows="3"
            ></textarea>
          </div>
          <div class="row text-center mx-0">
            <input
              type="reset"
              value="Effacer"
              class="col-3 col-md-2 offset-1 offset-md-2 offset-lg-1"
            />
            <input
              type="submit"
              value="Envoyer"
              class="col-3 offset-4 offset-md-3 offset-lg-5"
            />
          </div>
        </form>
      </div>
    </main>

    
  </div>
</template>

<script>

</script>
