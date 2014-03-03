//
//  TeamsViewController.m
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/16/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import "TeamsViewController.h"
#import "LibraryAPI.h"
#import "SWRevealViewController.h"

@interface TeamsViewController ()
@property (nonatomic, strong) NSMutableArray *teams;
@end


@implementation TeamsViewController
{
    UITableView *dataTable;
    NSDictionary *currentTeamData;
    int currentTeamIndex;
}

@synthesize teamsTable = _teamsTable;
@synthesize teams = _teams;

- (id)initWithStyle:(UITableViewStyle)style
{
    self = [super initWithStyle:style];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (void)viewDidLoad
{
    [super viewDidLoad];
    
    
    //UIBarButtonItem *shareItem = [[UIBarButtonItem alloc] initWithBarButtonSystemItem:UIBarButtonSystemItemMostViewed target:self action:nil];
    //UIBarButtonItem *cameraItem = [[UIBarButtonItem alloc] initWithBarButtonSystemItem:UIBarButtonSystemItemMore target:self action:nil];
    
    //NSArray *actionButtonItems = @[shareItem, cameraItem];
    //self.navigationItem.rightBarButtonItems = actionButtonItems;
    
    //[self.navigationController.navigationBar setBackgroundImage:[UIImage imageNamed:@"navbar.png"] forBarMetrics:UIBarMetricsDefault];
    
    //UIImage *barButtonImage = [[UIImage imageNamed:@"dots8822.fw.png"] resizableImageWithCapInsets:UIEdgeInsetsMake(0, 6, 0, 6)];
    //[[UIBarButtonItem appearance] setBackgroundImage:barButtonImage forState:UIControlStateNormal barMetrics:UIBarMetricsDefault];
    
    
    // Change button color
    _sidebarButton.tintColor = [UIColor colorWithWhite:0.1f alpha:0.9f];
    
    // Set the side bar button action. When it's tapped, it'll show up the sidebar.
    _sidebarButton.target = self.revealViewController;
    _sidebarButton.action = @selector(revealToggle:);
    
    // Set the gesture
    [self.view addGestureRecognizer:self.revealViewController.panGestureRecognizer];
    //populate teams array
    self.teams = [NSMutableArray arrayWithObjects:@"Knicks",@"Tarheels",@"Carlisle City", nil];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

#pragma mark - Table view data source

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    return 1;
}

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return self.teams.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    static NSString *CellIdentifier = @"Cell";
    UITableViewCell *cell = [self.teamsTable dequeueReusableCellWithIdentifier:CellIdentifier forIndexPath:indexPath];
    
    // Configure the cell...
    if(cell == nil){
        cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:CellIdentifier];
    }
    
    cell.textLabel.text = [self.teams objectAtIndex:indexPath.row];
    return cell;
}

/*
// Override to support conditional editing of the table view.
- (BOOL)tableView:(UITableView *)tableView canEditRowAtIndexPath:(NSIndexPath *)indexPath
{
    // Return NO if you do not want the specified item to be editable.
    return YES;
}
*/

/*
// Override to support editing the table view.
- (void)tableView:(UITableView *)tableView commitEditingStyle:(UITableViewCellEditingStyle)editingStyle forRowAtIndexPath:(NSIndexPath *)indexPath
{
    if (editingStyle == UITableViewCellEditingStyleDelete) {
        // Delete the row from the data source
        [tableView deleteRowsAtIndexPaths:@[indexPath] withRowAnimation:UITableViewRowAnimationFade];
    }   
    else if (editingStyle == UITableViewCellEditingStyleInsert) {
        // Create a new instance of the appropriate class, insert it into the array, and add a new row to the table view
    }   
}
*/

/*
// Override to support rearranging the table view.
- (void)tableView:(UITableView *)tableView moveRowAtIndexPath:(NSIndexPath *)fromIndexPath toIndexPath:(NSIndexPath *)toIndexPath
{
}
*/

/*
// Override to support conditional rearranging of the table view.
- (BOOL)tableView:(UITableView *)tableView canMoveRowAtIndexPath:(NSIndexPath *)indexPath
{
    // Return NO if you do not want the item to be re-orderable.
    return YES;
}
*/

#pragma mark - Navigation


- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    // Get the new view controller using [segue destinationViewController].
    
    
    if([segue.identifier isEqualToString:@"isoTeam"]){
        UITabBarController *tabBarController = (UITabBarController *)segue.destinationViewController;
		TeamViewController *teamViewController = [[tabBarController viewControllers]objectAtIndex:0];
        teamViewController.delegate = self;
    }
    else if([segue.identifier isEqualToString:@"joeSegue"]){
        
    }
    // Pass the selected object to the new view controller.
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath
{
    //currentTeamData = [self.players objectAtIndex:indexPath.row];
    [self performSegueWithIdentifier:@"isoTeam" sender:self];
}

#pragma mark - TeamViewControllerDelegate Methods

@end
