<template>
  <section class="portfolio">
    <div
      class="tile"
      v-for="(project, index) in projects"
      :key="index"
      :style="{
        backgroundColor: project.complimentaryColor,
        backgroundImage: 'url(' + project.logo + ')',
        backgroundSize: project.logoSize
      }"
      @click="ShowProject(project)"
      v-show="!project.inDevelopment"
    >
      <caption>
        {{
          project.name
        }}
      </caption>
    </div>
    <transition name="slide-fade">
      <ProjectShow
        :project="selectedProject"
        v-if="displayProjectShow"
        @clicked="HideProject()"
      />
    </transition>
  </section>
</template>

<script>
import ProjectShow from "@/components/ProjectShow.vue";

export default {
  name: "portfolio",
  components: {
    ProjectShow
  },
  methods: {
    ShowProject(project) {
      return (this.displayProjectShow = true), (this.selectedProject = project);
    },
    HideProject() {
      return (this.displayProjectShow = false), (this.selectedProject = null);
    }
  },
  data() {
    return {
      displayProjectShow: false,
      selectedProject: null,
      projects: [
        {
          name: "EZ Expenses",
          jobTitle: "Full Stack Developer",
          description: `Milage and expenses tracking app for field based business users.  
          Mobile first design, allowing quick and simple logging of business trips and purchases. 
          Leverages Google API’s to search for destinations, calculate optimal route, distance and time.`,
          techStack: [
            "Node.js",
            "Express.js",
            "MySQL",
            "Vue.js",
            "Vuetify",
            "Amazon S3",
            "Google Directions API",
            "Google Autocomplete API"
          ],
          logo: "/img/ez-expenses-logo.png",
          logoSize: "45%",
          complimentaryColor: "#2E303B",
          url: "https://ez-expenses.co.uk",
          inDevelopment: false
        },
        {
          name: "RobinMail",
          jobTitle: "Full Stack Developer",
          description: `Designed as a quick and simple solution for Front End Developers that wish to send emails. 
          Using RobinMail removes the need to create your own mail servers, saving you time. 
          RobinMail also ensures your destination email stays private and is not visible in your front-end scripts!`,
          techStack: ["Node.js", "Express.js", "MongoDB", "Nodemailer.js"],
          logo: "/img/robinmail-logo.png",
          logoSize: "45%",
          complimentaryColor: "#BA1A28",
          url: "http://www.robinmail.org",
          inDevelopment: false
        },
        {
          name: "Teach Luminous",
          jobTitle: "Product Development Manager & Full Stack Developer",
          description: `Digital teaching resource targeting primary (KS2) and secondary schools. 
          Styled as a digital magazine, this content managed web app is updated each week with educational videos, quiz's, 
          exercises and debates which are perfect for the short and typically under reasourced form periods each day. 
          I fulfilled the role of Product Development Manager for the main build of this site, 
          whilst also developing a business administration area for Teach Luminous staff to access & manage customer data.`,
          techStack: [
            "Node.js",
            "Express.js",
            "CosmosDB",
            "Vue.js",
            "Bootstrap-Vue"
          ],
          logo: "/img/teach-luminous-logo.svg",
          logoSize: "90%",
          complimentaryColor: "#3C3C3B",
          url: "https://teachluminous.com",
          inDevelopment: false
        },
        {
          name: "Click Happy EYFS",
          jobTitle: "Full Stack Developer",
          description: `Interactive educational games and learning resources targeted for EYFS in primary schools. 
          These games are designed for use on the interactive whiteboards, indivdual ipads or desktops - with printable supplentary resources.`,
          techStack: [
            "PHP",
            "MySQL",
            "HTML",
            "CSS",
            "JavaScript",
            "jQuery",
            "Bootstrap"
          ],
          logo: "/img/click-happy-logo.png",
          logoSize: "70%",
          complimentaryColor: "#fff",
          url: "https://click-happy.co.uk",
          inDevelopment: false
        },

        {
          name: "HubSuite",
          jobTitle: "Full Stack Developer",
          description: `A project management tool for software development companies, designed to track development tasks and bugs. 
          Contains helpdesk ticketing for clients, sprint & task management for the development team and detailed reporting for management.`,
          techStack: ["ASP.NET Core", "MS SQL Server", "Vue.js"],
          logo: "/img/HubSuite-logo.png",
          logoSize: "60%",
          complimentaryColor: "#018080",
          url: "https://hubsuite.co.uk",
          inDevelopment: true
        },
        {
          name: "Convo",
          jobTitle: "Full Stack Developer",
          description: `Inspired by the chat app utilised in the Channel 4 Hit TV Show "The Circle". 
          Convo is a simple & fully responsive messaging app for chatting with friends and meeting new people.`,
          techStack: [
            "Node.js",
            "Express.js",
            "Socket.io",
            "MongoDB",
            "Vue.js"
          ],
          logo: "/img/convo-logo.png",
          logoSize: "70%",
          complimentaryColor: "#06142E",
          url: "#",
          inDevelopment: true
        },
        {
          name: "Provision Tracker",
          jobTitle: "Product Development Manager",
          description: `Special Educational Needs (SEN) provision tracking tool for primary, secondary and special schools across the UK. 
          Simplicity and ease of use was the focus here, with the product producing detailed cost-benefit analysis of school provision following minimal user input.`,
          techStack: [],
          logo: "/img/provision-tracker-logo.png",
          logoSize: "80%",
          complimentaryColor: "#0E6AB0",
          url: "https://provisiontracker.com",
          inDevelopment: false
        },
        {
          name: "The Glazey Place",
          jobTitle: "Full Stack Developer",
          description: `Simple yet elegant brochure site for The Gazey Place, a paint your own pottery studio based in Mansfield. 
          This site was developed mobile first due to the nature of traffic recieved and includes a facebook integration to display their most recent posts.`,
          techStack: ["HTML", "CSS", "JavaScript", "Bootstrap"],
          logo: "/img/glazey-place-logo.png",
          logoSize: "60%",
          complimentaryColor: "#fff",
          url: "https://theglazeyplace.co.uk",
          inDevelopment: false
        },

        {
          name: "Pet Portaits By Katy",
          jobTitle: "Full Stack Developer",
          description: `Beautiful photo gallery of an artists pet portrait sketches and other digital artworks. Enables customers to contact the artist and for the admin to manage current commissions.`,
          techStack: ["Express.js", "MongoDB", "Vue.js"],
          logo: "/img/pet-portraits-logo.png",
          logoSize: "60%",
          complimentaryColor: "#fff",
          url: "#",
          inDevelopment: true
        },
        {
          name: "School Report Writer",
          jobTitle: "Full Stack Developer",
          description: `A simple and intuitive web app designed to take the stress out of writing school reports! Targeted at teachers in primary schools, 
          School Report Writer is a modern, efficient solution to a typically tedius & time consuming task.`,
          techStack: ["ASP.NET Core", "MS SQL Server", "Vue.js"],
          logo: "/img/school-report-writer-logo.png",
          logoSize: "60%",
          complimentaryColor: "#922D50",
          url: "#",
          inDevelopment: true
        },
        {
          name: "Groupie",
          jobTitle: "Full Stack Developer",
          description: `Meetup app allowing people to find local groups & events based on their interests. Whether it be for networking, just socialising or fun you will definately find the group for you.`,
          techStack: ["ASP.NET Core", "MS SQL Server", "Vue.js"],
          logo: "/img/groupie-logo.png",
          logoSize: "60%",
          complimentaryColor: "#fff",
          url: "#",
          inDevelopment: true
        },
        {
          name: "Thought Stream",
          jobTitle: "Full Stack Developer",
          description: `Inspired by Twitter, this app encourages users to post their thoughts anonomously in 150 characters or less. 
          Daily site theme cycles update the look & feel of the app, resulting in very different thoughts being posted. 
          Whether they be funny, hard hitting, political or educational, Thought Stream allows it all, no filtering, no holds barred.`,
          techStack: ["Express.js", "MongoDB", "Vue.js"],
          logo: "/img/thought-stream-logo.png",
          logoSize: "60%",
          complimentaryColor: "#E85D75",
          url: "#",
          inDevelopment: true
        },
        {
          name: "Tiny Tums",
          jobTitle: "Full Stack Developer",
          description: `Mobile first design, this app aids new mums in tracking feeds, naps and bowels of their little bundles of joy. 
          Packed full of advice and guidance, Tiny Tums is a simple solution to help mums stay organised in the chaos of parenting a newborn. `,
          techStack: ["Express.js", "MongoDB", "Vue.js"],
          logo: "/img/tiny-tums-logo.png",
          logoSize: "60%",
          complimentaryColor: "#75A3BC",
          url: "#",
          inDevelopment: true
        },
        {
          name: "The Weather App",
          jobTitle: "Full Stack Developer",
          description: `A simple experiment with Vue.js, bringing up to date weather information on your chosen location in a beautiful desktop view.`,
          techStack: ["Vue.js"],
          logo: "/img/weather-app-logo.png",
          logoSize: "60%",
          complimentaryColor: "#F0CF65",
          url: "#",
          inDevelopment: true
        }
      ]
    };
  }
};
</script>

<style scoped>
.portfolio {
  max-height: 70vh;
  max-width: 100%;
  margin: 15vh 5vw;
  padding: 0 5vw;
  overflow-y: auto;
  -ms-overflow-style: none;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
}

/* Width */
.portfolio::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.portfolio::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
.portfolio::-webkit-scrollbar-thumb {
  background: rgba(255, 255, 255, 0.5);
  border-radius: 10px;
}

.tile {
  position: relative;
  height: 250px;
  background-position: center;
  background-repeat: no-repeat;
  transform-origin: center;
  transition: transform 0.2s ease-in;
}

.tile:hover {
  cursor: pointer;
  transform: scale(1.03);
  z-index: 100;
  -webkit-box-shadow: 0px 10px 21px -4px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 10px 21px -4px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 10px 21px -4px rgba(0, 0, 0, 0.75);
}

.tile:hover caption {
  opacity: 1;
}

caption {
  transform-origin: bottom;
  transition: 0.4s ease-in;
  transition-delay: 0.2s;
  opacity: 0;
  display: block;
  width: 100%;
  background-color: white;
  color: #2c2c2d;
  font-weight: 600;
  font-size: 1.8rem;
  padding: 5px 0;
  position: absolute;
  bottom: 0;
  left: 0;
}

@media screen and (max-width: 886px) {
  .portfolio {
    max-height: 60vh;
    margin: 15vh 10vw;
    padding: 0 10vw;
  }
  .tile {
    height: 300px !important;
    background-size: 40% !important;
  }
}

@media screen and (max-width: 580px) {
  .portfolio {
    max-height: 60vh;
    margin: 15vh 2vw;
    padding: 0 2vw;
    overflow-x: hidden;
  }
  .tile {
    max-width: 100%;
    height: 200px !important;
    background-size: 30% !important;
  }
}

@media screen and (max-width: 400px) {
  .portfolio {
    max-height: 60vh;
    width: 100%;
    margin: 10vh 0 15vh;
    padding: 0;
    overflow-x: hidden;
  }
  .tile {
    max-width: 100%;
    height: 200px !important;
    background-size: 30% !important;
  }
  caption {
    display: none;
  }
}
</style>
