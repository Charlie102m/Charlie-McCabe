<template>
  <section class="portfolio">
    <div
      class="tile"
      v-for="(project, index) in projects"
      :key="index"
      :style="{
        backgroundColor: project.complimentaryColor,
        backgroundImage: 'url(' + project.logo + ')',
        backgroundSize: project.logoSize,
      }"
      @click="ShowProject(project)"
      v-show="!project.hideProject"
    >
      <span class="inDevelopment" v-show="project.inDevelopment"
        >In Development!</span
      >
      <span class="updated" v-show="project.recentlyUpdated"
        >Recently Updated!</span
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
    ProjectShow,
  },
  methods: {
    ShowProject(project) {
      return (this.displayProjectShow = true), (this.selectedProject = project);
    },
    HideProject() {
      return (this.displayProjectShow = false), (this.selectedProject = null);
    },
  },
  data() {
    return {
      displayProjectShow: false,
      selectedProject: null,
      projects: [
        {
          name: "Selazar",
          jobTitle: "Senior Software Engineer",
          description: `Fulfillment as a service platform undergoing modernisation and optimization with ongoing re-writes to event driven architecture.`,
          techStack: [
            "React.js",
            "Typescript",
            "Bootstrap",
            ".NET Core & .NET 6",
            "Microsoft SQL Server",
            "AWS",
            "Jenkins",
          ],
          logo: "/img/selazar-logo.png",
          logoSize: "80%",
          complimentaryColor: "#063155",
          url: "https://www.selazar.com/",
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Selenity Expenses",
          jobTitle: "Software Engineer",
          description: `Fast, accurate and compliant expenses software. Undergoing a substantial re-write from a legacy .NET framework monolith to .NET 5 microservices with an SPA front end.`,
          techStack: [
            "React.js",
            "Typescript",
            "Material UI",
            ".NET 5",
            "Redis",
            "Microsoft SQL Server",
            "Azure",
            "Kubernetes",
          ],
          logo: "/img/sel-expenses-logo.png",
          logoSize: "80%",
          complimentaryColor: "#8F1FF7",
          url: "https://www.allocatesoftware.com/expense-management-software/",
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Refinement Agenda Manager",
          jobTitle: "Software Engineer",
          description: `A lightweight desktop application to manage refinement agendas. Add work items to an agenda in seconds with the in build Azure Dev Ops integration. Then copy the generated planningpoker.com formatted links to your clipboard with a single click.`,
          techStack: ["Electron.js", "React.js", "Material UI", "Typescript"],
          logo: "/img/ram-icon.png",
          logoSize: "60%",
          complimentaryColor: "#333333",
          url: "https://github.com/Charlie102m/RAM-Refinement-Agenda-Manager",
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: true,
        },
        {
          name: "GiggleFeed",
          jobTitle: "Software Engineer",
          description: `Mobile friendly social media for one thing and one thing only, jokes! 
          Currently in development with the API built and the UI coming soon, GiggleFeed will 
          resemble a twitter/redit style hybrid. Users can post their own jokes, react to each joke
           and follow their fellow Gigglers!`,
          techStack: ["ASP.NET Core", "Cloudify", "SQL Server", "React.js"],
          logo: "/img/GF_Logo_Black_NB_CROPPED.PNG",
          logoSize: "90%",
          complimentaryColor: "#fff",
          url: "http://gigglefeed.com",
          hideProject: false,
          inDevelopment: true,
          recentlyUpdated: false,
        },
        {
          name: "EZ Expenses",
          jobTitle: "Software Engineer",
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
            "Google Autocomplete API",
          ],
          logo: "/img/ez-expenses-logo.png",
          logoSize: "45%",
          complimentaryColor: "#2E303B",
          url: "https://www.ez-expenses.co.uk",
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: true,
        },

        {
          name: "RobinMail",
          jobTitle: "Software Engineer",
          description: `Designed as a quick and simple solution for Front End Developers that wish to send emails. 
          Using RobinMail removes the need to create your own mail servers, saving you time. 
          RobinMail also ensures your destination email stays private and is not visible in your front-end scripts!`,
          techStack: ["Node.js", "Express.js", "MongoDB", "Nodemailer.js"],
          logo: "/img/robinmail-logo.png",
          logoSize: "45%",
          complimentaryColor: "#BA1A28",
          url: "https://github.com/Charlie102m/RobinMail",
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: false,
        },

        {
          name: "HubSuite",
          jobTitle: "Software Engineer",
          description: `A project management tool for software development companies, designed to track development tasks and bugs. 
          Contains helpdesk ticketing for clients, sprint & task management for the development team and detailed reporting for management.`,
          techStack: ["ASP.NET Core", "MS SQL Server", "Vue.js"],
          logo: "/img/HubSuite-logo.png",
          logoSize: "60%",
          complimentaryColor: "#018080",
          url: "https://hubsuite.co.uk",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Convo",
          jobTitle: "Software Engineer",
          description: `Inspired by the chat app utilised in the Channel 4 Hit TV Show "The Circle". 
          Convo is a simple & fully responsive messaging app for chatting with friends and meeting new people.`,
          techStack: [
            "Node.js",
            "Express.js",
            "Socket.io",
            "MongoDB",
            "Vue.js",
          ],
          logo: "/img/convo-logo.png",
          logoSize: "70%",
          complimentaryColor: "#06142E",
          url: "#",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
        },

        {
          name: "Click Happy EYFS",
          jobTitle: "Software Engineer",
          description: `Interactive educational games and learning resources targeted for EYFS in primary schools. 
          These games are designed for use on the interactive whiteboards, indivdual ipads or desktops - with printable supplentary resources.`,
          techStack: [
            "PHP",
            "MySQL",
            "HTML",
            "CSS",
            "JavaScript",
            "jQuery",
            "Bootstrap",
          ],
          logo: "/img/click-happy-logo.png",
          logoSize: "70%",
          complimentaryColor: "#fff",
          url: "https://click-happy.co.uk",
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Pet Portaits By Katy",
          jobTitle: "Software Engineer",
          description: `Beautiful photo gallery of an artists pet portrait sketches and other digital artworks. Enables customers to contact the artist and for the admin to manage current commissions.`,
          techStack: ["Express.js", "MongoDB", "Vue.js"],
          logo: "/img/pet-portraits-logo.png",
          logoSize: "60%",
          complimentaryColor: "#fff",
          url: "#",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "School Report Writer",
          jobTitle: "Software Engineer",
          description: `A simple and intuitive web app designed to take the stress out of writing school reports! Targeted at teachers in primary schools, 
          School Report Writer is a modern, efficient solution to a typically tedius & time consuming task.`,
          techStack: ["ASP.NET Core", "MS SQL Server", "Vue.js"],
          logo: "/img/school-report-writer-logo.png",
          logoSize: "60%",
          complimentaryColor: "#922D50",
          url: "#",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Groupie",
          jobTitle: "Software Engineer",
          description: `Meetup app allowing people to find local groups & events based on their interests. Whether it be for networking, just socialising or fun you will definately find the group for you.`,
          techStack: ["ASP.NET Core", "MS SQL Server", "Vue.js"],
          logo: "/img/groupie-logo.png",
          logoSize: "60%",
          complimentaryColor: "#fff",
          url: "#",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Thought Stream",
          jobTitle: "Software Engineer",
          description: `Inspired by Twitter, this app encourages users to post their thoughts anonomously in 150 characters or less. 
          Daily site theme cycles update the look & feel of the app, resulting in very different thoughts being posted. 
          Whether they be funny, hard hitting, political or educational, Thought Stream allows it all, no filtering, no holds barred.`,
          techStack: ["Express.js", "MongoDB", "Vue.js"],
          logo: "/img/thought-stream-logo.png",
          logoSize: "60%",
          complimentaryColor: "#E85D75",
          url: "#",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Tiny Tums",
          jobTitle: "Software Engineer",
          description: `Mobile first design, this app aids new mums in tracking feeds, naps and bowels of their little bundles of joy. 
          Packed full of advice and guidance, Tiny Tums is a simple solution to help mums stay organised in the chaos of parenting a newborn. `,
          techStack: ["Express.js", "MongoDB", "Vue.js"],
          logo: "/img/tiny-tums-logo.png",
          logoSize: "60%",
          complimentaryColor: "#75A3BC",
          url: "#",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "The Weather App",
          jobTitle: "Software Engineer",
          description: `A simple experiment with Vue.js, bringing up to date weather information on your chosen location in a beautiful desktop view.`,
          techStack: ["Vue.js"],
          logo: "/img/weather-app-logo.png",
          logoSize: "60%",
          complimentaryColor: "#F0CF65",
          url: "#",
          hideProject: true,
          inDevelopment: false,
          recentlyUpdated: false,
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
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: false,
        },
        {
          name: "Teach Luminous",
          jobTitle: "Product Development Manager & Software Engineer",
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
            "Bootstrap-Vue",
          ],
          logo: "/img/teach-luminous-logo.svg",
          logoSize: "90%",
          complimentaryColor: "#3C3C3B",
          url: "https://teachluminous.com",
          hideProject: false,
          inDevelopment: false,
          recentlyUpdated: false,
        },
      ],
    };
  },
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

.updated,
.inDevelopment {
  position: relative;
  top: 10px;
  background-color: gold;
  color: black;
  text-transform: uppercase;
  font-weight: 400;
  padding: 2px 15px 2px 5px;
  float: right;
  line-height: 25px;
  -webkit-box-shadow: -5px 5px 15px 0px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: -5px 5px 15px 0px rgba(0, 0, 0, 0.5);
  box-shadow: -5px 5px 15px 0px rgba(0, 0, 0, 0.5);
}

.inDevelopment {
  background-color: #e70e97;
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
    background-size: 50% !important;
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
    height: 230px !important;
    background-size: 40% !important;
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
    background-size: 40% !important;
  }
  caption {
    display: none;
  }
}
</style>
