<template>
    <div>
         <v-app-bar color="white" class="align-center text-center justify-center">
            <v-avatar size="50">
                <v-img src="/images/logo.png"></v-img>
            </v-avatar>
            <v-card-title class="d-none d-sm-flex">Wall of Tears</v-card-title>
            <v-spacer></v-spacer>
            <v-spacer></v-spacer>
            <v-spacer></v-spacer>
            <v-text-field
                outlined
                rounded
                hide-details
                dense
                label="Search"
                append-icon="mdi-magnify"
                class="d-none d-sm-flex"
            ></v-text-field>
            <v-spacer></v-spacer>
            <v-spacer></v-spacer>
            <v-spacer></v-spacer>
            <v-btn icon class="d-flex d-sm-none">
                <v-icon>mdi-magnify</v-icon>
            </v-btn>
            <v-btn icon @click="info = true">
                <v-icon>mdi-information-variant</v-icon>
            </v-btn>
            <v-btn icon @click="login = true">
                <v-icon>mdi-account</v-icon>
            </v-btn>
        </v-app-bar>

        <!-- information dialog -->
        <v-dialog v-model="info" width="700">
            <v-card>
                <v-card-title >
                About Wall Of Tears
                </v-card-title>

                <v-card-text>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </v-card-text>

                <v-divider></v-divider>

                <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary" text @click="info = false">
                    Ok
                </v-btn>
                </v-card-actions>
            </v-card>
         </v-dialog>
        <!-- end dialog -->

        <!-- login dialog -->
        <v-dialog v-model="login" width="700">
            <v-card>
                <v-card-title >
                Login
                </v-card-title>

                <v-card-text>
                
                </v-card-text>

                <v-divider></v-divider>

                <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary" text @click="login = false">
                    Ok
                </v-btn>
                </v-card-actions>
            </v-card>
         </v-dialog>
        <!-- end login dialog -->
    </div>
</template>
<script>
export default {
    name:'toolbar',
    data() {
        return {
            info:false,
            login:false,
        }
    },
}
</script>